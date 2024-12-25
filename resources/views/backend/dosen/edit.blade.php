@extends('backend.layouts.main')
    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Edit Data Dosen</h1>
        <form action="{{ route('dosen-dashboard.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{ $data->nik }}" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}" required>
            </div>

            
            {{-- PRODI --}}
            <div class="mb-3">
                <label for="prodi_id" class="form-label">Prodi</label>
                <select class="form-control" id="prodi_id" name="prodi_id" required>
                    <option value="" disabled selected>Pilih Program Studi</option>
                    @foreach ($prodis as $prodi)
                        <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $data->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    @endsection