@extends('backend.layouts.main')

@section('content')
<h1>EDIT MAHASISWA</h1>

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('mahasiswa-dashboard.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                {{-- NIM --}}
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" id="nim" class="form-control" value="{{ $data->nim }}" required>
                    </div>
                </div>
                
                {{-- Nama Lengkap --}}
                <div class="row mb-3">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $data->nama_lengkap }}" required>
                    </div>
                </div>
                
                {{-- Tempat Lahir --}}
                <div class="row mb-3">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $data->tempat_lahir }}" required>
                    </div>
                </div>

                {{-- Tanggal Lahir --}}
                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $data->tgl_lahir }}" required>
                    </div>
                </div>
              
                {{-- Email --}}
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" id="email" name="email" class="form-control" value="{{ $data->email }}" required>
                    </div>
                </div>
                
                {{-- Prodi --}}
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" id="prodi" name="prodi" class="form-control" value="{{ $data->prodi }}" required>
                    </div>
                </div>

                {{-- Alamat --}}
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $data->alamat }}</textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection