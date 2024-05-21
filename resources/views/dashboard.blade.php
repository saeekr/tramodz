<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    @extends('admin')
    @section('content')
    <div class="container" style="margin-left: -400px;">
        <div class="row">
            <div class="col-6">
                <div class="card-booking">
                    <center>
                        <h2>Jumlah Booking</h2>
                    </center>
                    <hr>
                    <div class="content">
                        <p>{{ \App\Http\Controllers\BookingController::countBookings() }}</p>
                        <i class="fa fa-bag-shopping"></i>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-6">
                <div class="card-member">
                    <center>
                        <h2>Jumlah Member Aktif</h2>
                    </center>
                    <hr>
                    <div class="content">
                        <p>{{ \App\Http\Controllers\MemberController::countMembers() }}</p>
                        <i class="fa fa-people-group"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card-admin">
                    <center>
                        <h2>Jumlah Admin</h2>
                    </center>
                    <hr>
                    <div class="content">
                        <p>{{ \App\Http\Controllers\RegisterController::countAdmins() }}</p>
                        <i class="fa fa-user-tie"></i>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-6">
                <div class="card-user">
                    <center>
                        <h2>Jumlah User</h2>
                    </center>
                    <hr>
                    <div class="content">
                        <p>{{ \App\Http\Controllers\RegisterController::countUsers() }}</p>
                        <i class="fa fa-users"></i>
                    </div>
                    <br>
                </div>
            </div>
            <div class="container-table">
                <h2 lang="heading" style="margin-top: 50px;">List Booking Job Hitz Management</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Jumlah Orang</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Edit Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->nama }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->notelp }}</td>
                            <td>{{ $booking->kategori }}</td>
                            <td>{{ $booking->tanggal }}</td>
                            <td>{{ $booking->jumlah }}</td>
                            <td>{{ $booking->alamat }}</td>
                            <td>{{ $booking->keterangan }}</td>
                            <td>{{ $booking->status }}</td>
                            <td>
                                <form method="POST" action="{{ route('booking.updateStatus', $booking->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="pilih" {{ $booking->status === '' ? 'selected' : '' }}>pilih</option>
                                        <option value="unpaid" {{ $booking->status === 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                                        <option value="paid" {{ $booking->status === 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="done" {{ $booking->status === 'done' ? 'selected' : '' }}>Done</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>