@extends('layouts.main')

@section('content')
<h2>Data Mahasiswa</h2>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama Mahasiswa</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{$mahasiswas->firstItem()+$loop->index}}</td>
        <td>{{$mahasiswa->nim}}</td>
        <td>{{$mahasiswa->nama_lengkap}}</td>
        <td>{{$mahasiswa->tempat_lahir}}</td>
        <td>{{$mahasiswa->tgl_lahir}}</td>
        <td>{{$mahasiswa->email}}</td>
        <td>{{$mahasiswa->prodi}}</td>
        <td>{{$mahasiswa->alamat}}</td>
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links() }}

@endsection