<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use DB;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function indexIncome()
    // {
    //     $pemasukans = Pemasukan::all();
    //     $saldo = $this->saldo();

    //     return view('finance.income')
    //         ->with('pemasukans', $pemasukans)
    //         ->with('saldo', $saldo);
    // }

    // public function indexSpending()
    // {
    //     $pengeluarans = Pengeluaran::all();
    //     $saldo = $this->saldo();

    //     return view('finance.spending')
    //         ->with('pengeluarans', $pengeluarans)
    //         ->with('saldo', $saldo);
    // }
    public function pemasukan()
    {
        $pemasukans = Pemasukan::all();
        $saldo = $this->saldo();
        return view('finance.income')->with('pemasukans', $pemasukans)->with('saldo', $saldo);;
    }
    public function pengeluaran()
    {
        $pengeluarans = Pengeluaran::all();
        $saldo = $this->saldo();
        return view('finance.spending')->with('pengeluarans', $pengeluarans)->with('saldo', $saldo);;
    }
    // public function income()
    // {
    //     return view('finance/income');
    // }

    // /**
    //  * Display the member page.
    //  */
    // public function spending()
    // {
    //     return view('finance/spending');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePemasukan(Request $request)
    {
        $request->validate([
            'sumber' => 'required|string',
            'nominal' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Pemasukan::create([
            'sumber' => $request->sumber,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('income');
    }

    /**
     * Store a newly created resource in storage for pengeluaran.
     */
    public function storePengeluaran(Request $request)
    {
        $request->validate([
            'nominal' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Pengeluaran::create([
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('spending');
    }

    public function saldo()
    {
        $totalPemasukan = Pemasukan::sum('nominal');
        $totalPengeluaran = Pengeluaran::sum('nominal');
        $saldo = $totalPemasukan - $totalPengeluaran;

        return $saldo;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function deletePemasukan($id)
    {
        $pemasukan = Pemasukan::find($id);
        $pemasukan->delete();

        return redirect()->back()->with('success', 'Data pemasukan berhasil dihapus');
    }

    // Metode untuk menghapus data pengeluaran
    public function deletePengeluaran($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();

        return redirect()->back()->with('success', 'Data pengeluaran berhasil dihapus');
    }
}
