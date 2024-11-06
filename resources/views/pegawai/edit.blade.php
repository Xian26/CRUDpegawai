@extends('layout')

@section('content')

<h4>Edit Pegawai</h4>

<form action="{{route ('pegawai.update', $pegawai->id)}}" method="post">
    @csrf
    <label>NIP</label>
    <input type="number" name="nip" value="{{ $pegawai->nip }}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control mb-2">
    <label>No Telp</label>
    <input type="text" name="no_telp" value="{{ $pegawai->no_telp }}" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection