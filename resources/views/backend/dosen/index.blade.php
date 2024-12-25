@extends('backend.layouts.main')
@section('content')

    <h1>Data Dosen</h1>
    <p>Klik <a href="{{ route('dosen-dashboard.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> Disini
    </a> Untuk Menambahkan data</p>

    <table class="table table-bordered mt-3">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosens->firstItem() + $loop->index }}</td>
                    <td>{{ $dosen->nik }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>{{ $dosen->no_telp }}</td>
                    {{-- <td>{{ $dosen->prodi->nama ?? 'Tidak Ada' }}</td> --}}  <!-- Tampilan nama prodi --> 
                    <td>{{ $dosen->prodi->nama ?? 'Tidak Ada'}}</td>
                    <td>{{ $dosen->alamat }}</td>
                    <td>
                        <!-- Tombol edit dan hapus -->
                        <a href="{{ route('dosen-dashboard.edit', $dosen->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>
                        </a>


                        <form action="{{ route('dosen-dashboard.destroy', $dosen->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $dosens->links() }}
@endsection