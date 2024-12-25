@extends('layouts.main')
@section('content')

    <h1>Data Dosen</h1>
    <table class="table table-bordered mt-3 table-striped">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Prodi</th>
                <th>Alamat</th>
                </tr>
        </thead>
        
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosens->firstItem() + $loop->index }}</td>
                    <td>{{ $dosen->nik }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>{{ $dosen->no_telp }}</td>
                    <td>{{ $dosen->prodi->nama ?? 'Tidak Ada' }}</td> <!-- Tampilkan nama prodi -->
                    <td>{{ $dosen->alamat }}</td>
                    </tr>
            @endforeach
        
    </table>
    {{ $dosens->links() }}
@endsection