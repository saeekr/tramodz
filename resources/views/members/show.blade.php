@extends('members.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Members Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $members->nama }}</h5>
            <p class="card-text">Usia : {{ $members->usia }}</p>
            <p class="card-text">Jabatan : {{ $members->jabatan }}</p>
            <p class="card-text">Tahun Join : {{ $members->tahun }}</p>
        </div>
        </hr>
    </div>
</div>
<style>
    .card{
        background-color: #212121;
    }
</style>