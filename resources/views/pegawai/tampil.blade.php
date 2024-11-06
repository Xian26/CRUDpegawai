@extends('layout')

@section('content')

<div class="d-flex">
    <h4>list Pegawai</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('pegawai.tambah')}}"> Tambah Pegawai</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>No Telp</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    @foreach($pegawai as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nip }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->no_telp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>
            <a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pegawai.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection