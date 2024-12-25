@extends('backend.layouts.main')
@section('content')


    <h1>Tambah Data Dosen</h1>
    <form action="{{ route('dosen-dashboard.store') }}" method="POST">
        @csrf

        {{-- NIK --}}
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" class="form-control" id="nik" name="nik" required>
        </div>

        {{-- NAMA DOSEN --}}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        {{-- EMAIL --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        {{-- NOMOR TELEPON --}}
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
        </div>

        {{-- <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi_id" name="prodi_id" required>
        </div> --}}


        {{-- PRODI --}}
        <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select class="form-control" id="prodi_id" name="prodi_id" required>
                
                <option value="" >Pilih Program Studi</option>  {{-- jika menggunakan "disabled selected" di setelah value, maka option nya tidak bisa di pilih --}}
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endforeach
            </select>
        </div>
        
        {{-- ALAMAT --}}
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection