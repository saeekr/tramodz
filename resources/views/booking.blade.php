@extends('navbar')

@section('konten')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>TRAMODZ</title>
    <link rel="stylesheet" href="/css/kategori.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        #reservationText {
            display: inline-block;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="body">
        <div class="gallery">
            <div class="content">
                <img src="/img/modern dance.png">
                <h3>Modern Dance</h3>
                <p>ini kategori</p>
                <h6>100k/org</h6>

                <button class="book-1">Book Now</button>
            </div>

            <div class="content">
                <img src="/img/kpop dance.png">
                <h3>Kpop Dance</h3>
                <p>ini kategori</p>
                <h6>100k/org</h6>

                <button class="book-2">Book Now</button>
            </div>

            <div class="content">
                <img src="/img/kontemporer dance.png">
                <h3>Tari Kontemporer</h3>
                <p>ini kategori</p>
                <h6>100k/org</h6>

                <button class="book-3">Book Now</button>
            </div>

            <div class="content">
                <img src="/img/wedding dance.png" style="height: 335px;">
                <h3>Wedding Dance</h3>
                <p>ini kategori</p>
                <h6>100k/org</h6>
                <button class="book-4">Book Now</button>
            </div>

            <div class="content">
                <img src="/img/mv back dance.png">
                <h3>MV Backdancer</h3>
                <p>ini kategori</p>
                <h6>100k/org</h6>
                <button class="book-5">Book Now</button>
            </div>
        </div>
    </div>

    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(228.049, 155.359, 218.526, 1)" offset="0%"></stop>
                <stop stop-color="rgba(107.122, 215.532, 218.941, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,100L30,103.3C60,107,120,113,180,100C240,87,300,53,360,60C420,67,480,113,540,113.3C600,113,660,67,720,50C780,33,840,47,900,60C960,73,1020,87,1080,76.7C1140,67,1200,33,1260,30C1320,27,1380,53,1440,56.7C1500,60,1560,40,1620,40C1680,40,1740,60,1800,60C1860,60,1920,40,1980,56.7C2040,73,2100,127,2160,136.7C2220,147,2280,113,2340,110C2400,107,2460,133,2520,140C2580,147,2640,133,2700,110C2760,87,2820,53,2880,56.7C2940,60,3000,100,3060,120C3120,140,3180,140,3240,136.7C3300,133,3360,127,3420,116.7C3480,107,3540,93,3600,73.3C3660,53,3720,27,3780,33.3C3840,40,3900,80,3960,96.7C4020,113,4080,107,4140,113.3C4200,120,4260,140,4290,150L4320,160L4320,200L4290,200C4260,200,4200,200,4140,200C4080,200,4020,200,3960,200C3900,200,3840,200,3780,200C3720,200,3660,200,3600,200C3540,200,3480,200,3420,200C3360,200,3300,200,3240,200C3180,200,3120,200,3060,200C3000,200,2940,200,2880,200C2820,200,2760,200,2700,200C2640,200,2580,200,2520,200C2460,200,2400,200,2340,200C2280,200,2220,200,2160,200C2100,200,2040,200,1980,200C1920,200,1860,200,1800,200C1740,200,1680,200,1620,200C1560,200,1500,200,1440,200C1380,200,1320,200,1260,200C1200,200,1140,200,1080,200C1020,200,960,200,900,200C840,200,780,200,720,200C660,200,600,200,540,200C480,200,420,200,360,200C300,200,240,200,180,200C120,200,60,200,30,200L0,200Z"></path>
    </svg>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(228.049, 155.359, 218.526, 1)" offset="0%"></stop>
                <stop stop-color="rgba(107.122, 215.532, 218.941, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,100L30,103.3C60,107,120,113,180,100C240,87,300,53,360,60C420,67,480,113,540,113.3C600,113,660,67,720,50C780,33,840,47,900,60C960,73,1020,87,1080,76.7C1140,67,1200,33,1260,30C1320,27,1380,53,1440,56.7C1500,60,1560,40,1620,40C1680,40,1740,60,1800,60C1860,60,1920,40,1980,56.7C2040,73,2100,127,2160,136.7C2220,147,2280,113,2340,110C2400,107,2460,133,2520,140C2580,147,2640,133,2700,110C2760,87,2820,53,2880,56.7C2940,60,3000,100,3060,120C3120,140,3180,140,3240,136.7C3300,133,3360,127,3420,116.7C3480,107,3540,93,3600,73.3C3660,53,3720,27,3780,33.3C3840,40,3900,80,3960,96.7C4020,113,4080,107,4140,113.3C4200,120,4260,140,4290,150L4320,160L4320,200L4290,200C4260,200,4200,200,4140,200C4080,200,4020,200,3960,200C3900,200,3840,200,3780,200C3720,200,3660,200,3600,200C3540,200,3480,200,3420,200C3360,200,3300,200,3240,200C3180,200,3120,200,3060,200C3000,200,2940,200,2880,200C2820,200,2760,200,2700,200C2640,200,2580,200,2520,200C2460,200,2400,200,2340,200C2280,200,2220,200,2160,200C2100,200,2040,200,1980,200C1920,200,1860,200,1800,200C1740,200,1680,200,1620,200C1560,200,1500,200,1440,200C1380,200,1320,200,1260,200C1200,200,1140,200,1080,200C1020,200,960,200,900,200C840,200,780,200,720,200C660,200,600,200,540,200C480,200,420,200,360,200C300,200,240,200,180,200C120,200,60,200,30,200L0,200Z"></path>
    </svg>
    <br><br><br><br>
    <section id="booking" style="background: url('img/background booking page.png') center; background-size: 50%; background-repeat: no-repeat;">
        <h4 style="text-align: center; margin-top: 0;">BOOKING PAGE</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb=0">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <form action="/payment" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="notelp" name="notelp" aria-describedby="notelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Tari</label>
                            <div class="col-sm-16">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="modern">Modern Dance</option>
                                    <option value="kpop">Kpop Dance</option>
                                    <option value="kontemporer">Tari Kontemporer</option>
                                    <option value="wedding">Wedding Dance</option>
                                    <option value="backdancer">MV Backdancer</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah orang</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat (Lokasi Job)</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">BOOK NOW</button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div id="reservationText" class="d-flex align-items-center justify-content-center h-100">
                        <p class="text-center" style="color: white;"></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>


@endsection