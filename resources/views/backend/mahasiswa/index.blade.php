@extends('backend.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
      </div>

      <a href="{{ route ('mahasiswa-dashboard.create') }}" class="btn btn-primary">Tambahkan Data Mahasiswa</a>
<table class="table table-bordered">
    <thead class="table-warning">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama Mahasiswa</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    </thead>
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
        <td>
            <a href="{{ route('mahasiswa-dashboard.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm"
                title="Edit">
                <i class="bi bi-pencil-fill"></i>
            </a>

            <form action="{{ route('mahasiswa-dashboard.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links() }}

@endsection