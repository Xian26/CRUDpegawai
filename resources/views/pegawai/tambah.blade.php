@extends('layout')

@section('content')

<h4>Tambah Pegawai</h4>

<form action="{{route ('pegawai.submit')}}" method="post">
    @csrf
    <label>NIP</label>
    <input type="number" name="nip" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>No Telp</label>
    <input type="text" name="no_telp" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection