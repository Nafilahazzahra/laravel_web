@extends('backend.layouts.main')
@section('content')

    <h1>Tambah Program Studi</h1>
    <form action="{{ route('prodi-dashboard.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection