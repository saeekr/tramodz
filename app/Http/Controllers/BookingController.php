<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Midtrans\Config;


class BookingController extends Controller
{

    // public function index()
    // {
    //     return "tabel disini";
    // }
    public function index()
    {
        $bookings = Booking::all();
        return view('dashboard', compact('bookings'));
    }

    public function create()
    {
        return view('booking');
    }

    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::find($id);
        $input = $request->all();
        $booking->update($input);

        return redirect('dashboard');
    }

    public function payment(Request $request)
    {
        // $validateData = $request ->validate([
        //     'nama' => '',
        //     'email'=>'required|email',
        //     'notelp'=>'required|max:13',
        //     'kategori'=>'',
        //     'tanggal'=>'required|date',
        //     'jumlah'=> 'required|min:1|max:25',
        //     'alamat'=>'',
        //     'keterangan'=>'',
        // ]);
        $request->request->add(['total_harga' => $request->jumlah * 100000 + 200000, 'status' => 'Unpaid']);
        // Booking::create($validateData);
        $booking = Booking::create($request->all());
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $booking->id,
                'gross_amount' => $booking->total_harga,
            ),
            'customer_details' => array(
                'nama' => $request->nama,
                'email' => $request->email,
                'phone' => $request->notelp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('payment', compact('snapToken', 'booking'));
    }
    // public function updateStatusPayment(Request $request)
    // {
    //     $bookingId = $request->bookingID;
    //     $booking = Booking::find($bookingId);

    //     if ($booking) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'booking not found',
    //         ], 404);
    //     }

    //     $booking->payment_status = 'paid';
    //     $booking->save();
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Status payment telah diubah',
    //     ], 404);

    // }

    // public function updateStatusPayment(Request $request)
    // {
    //     $bookingId = $request->booking_id; // Ensure that you use the correct request data key
    //     $booking = Booking::find($bookingId);

    //     if (!$booking) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Booking not found',
    //         ], 404);
    //     }

    //     $booking->payment_status = 'paid';
    //     $booking->save();
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Status payment telah diubah',
    //     ], 200); // Change the status code to 200 since it's a successful operation
    // }


    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id, $request->status_code, $request->gross_amount, $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $booking = Booking::find($request->booking_id);
                $booking->update(['status' => 'Paid']);
            }
        };
    }
    public static function countBookings()
    {
        $totalBookings = Booking::where('status', 'Paid')->count();
        return $totalBookings;
    }
}
