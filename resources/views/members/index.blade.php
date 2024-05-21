@extends('admin')
@section('content')
<link rel="stylesheet" href="css/members.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h2>Data Anggota Aktif Hitz Management</h2>
                    </center>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Join</th>
                                    <th>Action</th>
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

                                    <td>
                                        <button class="btn btn-primary btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$item->id}}"><i class="fa fa-pencil-square-o"></i>
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Member</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- <form action="{{ url('members') }}" method="post"> -->
                                                        <form action="{{ url('members/' .$item->id) }}" method="post">
                                                            {!! csrf_field() !!}
                                                            @method('PATCH')
                                                            <label>Nama</label></br>
                                                            <input type="text" name="nama" id="nama" class="form-control text center" value="{{old('nama') ?? $item->nama}}"></br>
                                                            <label>Usia</label></br>
                                                            <input type="text" name="usia" id="usia" class="form-control text center" value="{{old('usia')?? $item->usia}}"></br>
                                                            <label>Jabatan</label></br>
                                                            <input type="text" name="jabatan" id="jabatan" class="form-control text center" value="{{old('jabatan')?? $item->jabatan}}"></br>
                                                            <label>Tahun Join</label></br>
                                                            <input type="text" name="tahun" id="tahun" class="form-control text center" value="{{old('tahun')?? $item->tahun}}"></br>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit" value="Save" class="btn btn-success"></br>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#delete-{{$item->id}}"><i class="fa fa-pencil-square-o"></i>
                                            <i class="fa fa-trash-o"></i> <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete-{{$item->id}}" alertdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alertLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data Member</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ url('/members' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <p>Yakin untuk menghapus???</p> <br>
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Member"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div> <br>

                <button class="btn btn-success btn-sm" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#staticBack"><i class="fa fa-pencil-square-o"></i> Tambah Data</button></a>
                <!-- Modal -->
                <div class="modal fade" id="staticBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Member</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('members') }}" method="post">
                                    {!! csrf_field() !!}
                                    <label>Nama</label></br>
                                    <input type="text" name="nama" id="nama" class="form-control"></br>
                                    <label>Usia</label></br>
                                    <input type="text" name="usia" id="usia" class="form-control"></br>
                                    <label>Jabatan</label></br>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control"></br>
                                    <label>Tahun Join</label></br>
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
            @endsection