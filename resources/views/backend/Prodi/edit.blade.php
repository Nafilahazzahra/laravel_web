@extends('backend.layouts.main')
@section('content')

    <h1>Edit Program Studi</h1>
    <form action="{{ route('prodi-dashboard.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $data->nama) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection