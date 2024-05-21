@extends('navbar')

@section('konten')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>TRAMODZ</title>
    <link rel="stylesheet" href="/css/join.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body>
    <section STYLE="padding:10px" id="join">
        <h4 style="text-align: center; margin-top: 30px; font-family: Montserrat;">PENDAFTARAN MEMBER BARU <br> HITZ MANAGEMENT</h4>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <form method="POST" action="{{ route('members.store') }}" class="formm">
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="usia" class="col-sm-4 col-form-label">Usia</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="usia" name="usia" aria-describedby="usia" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="tahun" class="col-sm-4 col-form-label">Tahun Daftar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tahun" name="tahun" aria-describedby="tahun" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="jabatan" name="jabatan" required>
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="surat" class="col-sm-4 col-form-label">Surat Kontrak</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="surat" name="surat" accept="image/*" aria-describedby="surat" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8" style="width: 40%">
                                <small style="color: white;">Maks upload 1MB</small>
                                <a href="/pdf/MOU HITZ MANAGEMENT.pdf" download="MOU HITZ MANAGEMENT.pdf" class="btn btn-success w-100 mt-3" style="background-color: #EE99C2;">Unduh Surat Kontrak</a>
                            </div>
                        </div>
                        <div style="margin-top: 100px">
                            <button type="submit" class="btn btn-primary w-100" margin-top="100px"></i> KIRIM</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </script>
</body>

</html>


@endsection