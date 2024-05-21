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
                <div class="col-12">
                    <div class="card2">
                        <div class="card-header">
                            <center>
                                <h2>Pengeluaran</h2>
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
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pengeluarans as $pengeluaran)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengeluaran->nominal }}</td>
                                            <td>{{ $pengeluaran->tanggal }}</td>
                                            <td>{{ $pengeluaran->keterangan }}</td>
                                            <td>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#deleting-{{$pengeluaran->id}}">
                                                    <i class="fa fa-trash-o"></i> <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                                </button>

                                                <!-- Modal untuk konfirmasi penghapusan Pengeluaran -->
                                                <div class="modal fade" id="deleting-{{$pengeluaran->id}}" tabindex="-1" aria-labelledby="deleteModal{{$pengeluaran->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModal{{$pengeluaran->id}}Label">Hapus Pengeluaran</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" action="{{ route('finance.destroyPengeluaran', $pengeluaran->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <p>Yakin untuk menghapus data pengeluaran ini?</p><br>
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Pengeluaran"><i class="fa fa-trash-o"></i> Delete</button>
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
                            <button class="btn btn-success btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#spending"><i class="fa fa-pencil-square-o"></i> Tambah Pengeluaran</button>
                            <!-- Modal -->
                            <div class="modal fade" id="spending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="spendingdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5  text-dark" id="staticBackdropLabel">Tambah Pengeluaran</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('finance.storePengeluaran') }}" method="POST">
                                                @csrf
                                                <label class="text-dark">Nominal</label><br>
                                                <input type="number" name="nominal" id="nominal" class="form-control" required><br>
                                                <label class="text-dark">Tanggal</label><br>
                                                <input type="date" name="tanggal" id="tanggal" class="form-control" required><br>
                                                <label class="text-dark">Keterangan</label><br>
                                                <input type="text" name="keterangan" id="keterangan" class="form-control" required><br>
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