<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
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
                        <p> </p>
                        <i class="fa fa-scale-balanced"></i>
                    </div> <br>
                </div>
                <br>
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
                                    @foreach($incomes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->nominal }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->keterangan }}</td>

                                        <td>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#alert"><i class="fa fa-pencil-square-o"></i> Delete</button></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="alert" alertdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alertLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Pemasukan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('incomes') }}" method="post">
                                                                {!! csrf_field() !!}
                                                                <p>Yakin untuk menghapus???</p> <br>
                                                                <form method="POST" action="{{ url('/incomes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Income" onclick="return confirm(" Confirm delete?")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                                </form>
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
                        <button class="btn btn-success btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBack"><i class="fa fa-pencil-square-o"></i> Tambah Pemasukan</button></a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemasukan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('incomes') }}" method="post">
                                            {!! csrf_field() !!}
                                            <label>Sumber</label></br>
                                            <input type="text" name="sumber" id="sumber" class="form-control"></br>
                                            <label>Nominal</label></br>
                                            <input type="number" name="usia" id="usia" class="form-control"></br>
                                            <label>Tanggal</label></br>
                                            <input type="datetime" name="jabatan" id="jabatan" class="form-control"></br>
                                            <label>Keterangan</label></br>
                                            <input type="text" name="tahun" id="tahun" class="form-control"></br>
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

            <br><br><br><br><br><br><br>

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
                                    @foreach($incomes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nominal }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->keterangan }}</td>

                                        <td>
                                            <form method="POST" action="{{ url('/incomes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#alert"><i class="fa fa-pencil-square-o"></i> Delete</button></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="alert" alertdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alertLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Pemasukan</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('incomes') }}" method="post">
                                                                    {!! csrf_field() !!}
                                                                    <p>Yakin untuk menghapus???</p> <br>
                                                                    <form method="POST" action="{{ url('/incomes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Income" onclick="return confirm(" Confirm delete?")><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                                    </form>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-success btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#spending"><i class="fa fa-pencil-square-o"></i> Tambah Pengeluaran</button></a>
                        <!-- Modal -->
                        <div class="modal fade" id="spending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="spendingdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5  text-dark" id="staticBackdropLabel">Tambah Pengeluaran</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('incomes') }}" method="post">
                                            {!! csrf_field() !!}
                                            <label class="text-dark">Nominal</label><br>
                                            <input type="number" name="usia" id="usia" class="form-control"><br>
                                            <label class="text-dark">Tanggal</label><br>
                                            <input type="datetime" name="jabatan" id="jabatan" class="form-control"><br>
                                            <label class="text-dark">Keterangan</label><br>
                                            <input type="text" name="tahun" id="tahun" class="form-control"><br>
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