@extends('navbar')

@section('konten')

<!DOCTYPE html>
<html>

<head>
    <title>Table layout</title>
    <link rel="stylesheet" href="css/member.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h2 lang="heading">Daftar Member Aktif Hitz Management</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jabatan</th>
                    <th>Tahun Join</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->usia }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->tahun }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="image">
        <img src="img/wedding dance.png" alt="" class="img1">
        <img src="img/kontemporer dance.png" alt="" class="img2">
    </div>
</body>

</html>


@endsection