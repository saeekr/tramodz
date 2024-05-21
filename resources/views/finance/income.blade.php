<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
    <link rel="stylesheet" href="css/inspen.css">
    <link rel="stylesheet" href="css/members.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

</head>

<body>
    @extends('admin')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-saldo">
                    <center>
                        <h2>Saldo</h2>
                    </center>
                    <hr>
                    <div class="content">
                        <p>Rp. {{ $saldo }}</p>
                        <i class="fa fa-scale-balanced"></i>
                    </div> <br>
                </div>
                <br><br>
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h2>Pemasukan</h2>
                        </center>
                    </div>
                    <div class="card-body">
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sumber</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pemasukans as $pemasukan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pemasukan->sumber }}</td>
                                        <td>{{ $pemasukan->nominal }}</td>
                                        <td>{{ $pemasukan->tanggal }}</td>
                                        <td>{{ $pemasukan->keterangan }}</td>
                                        <td>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{$pemasukan->id}}"><i class="fa fa-pencil-square-o"></i>
                                                <i class="fa fa-trash-o"></i> <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="delete-{{$pemasukan->id}}" alertdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alertLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data Member</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('finance.destroyPemasukan', $pemasukan->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <p>Yakin untuk menghapus data pemasukan ini?</p><br>
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Pemasukan"><i class="fa fa-trash-o"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-success btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBack"><i class="fa fa-pencil-square-o"></i> Tambah Pemasukan</button>
                        <div class="modal fade" id="staticBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemasukan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('finance.storePemasukan') }}" method="POST">
                                            @csrf
                                            <label>Sumber</label></br>
                                            <input type="text" name="sumber" id="sumber" class="form-control" required></br>
                                            <label>Nominal</label></br>
                                            <input type="number" name="nominal" id="nominal" class="form-control" required></br>
                                            <label>Tanggal</label></br>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" required></br>
                                            <label>Keterangan</label></br>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" required></br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" value="Save" class="btn btn-success"></br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>