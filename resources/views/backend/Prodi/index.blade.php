@extends('backend.layouts.main')
@section('content')

    <h1>Data Program Studi</h1>
    <p>Klik <a href="{{ route('prodi-dashboard.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> Disini
    </a> Untuk Menambahkan data Program Studi</p>

    <table class="table table-bordered mt-3">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodis->firstItem() + $loop->index }}</td>
                    <td>{{ $prodi->nama }}</td>
                    <td>
                        <a href="{{ route('prodi-dashboard.edit', $prodi->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i>  {{--ICON EDIT --}}
                        </a>


                        <form action="{{ route('prodi-dashboard.destroy', $prodi->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash-fill"></i>   {{--ICON HAPUS --}}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $prodis->links() }}
@endsection