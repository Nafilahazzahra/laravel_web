@extends('backend.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Mahasiswa</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('mahasiswa-dashboard.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" class="form-control" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" id="prodi" name="prodi" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                    </div>

                    <button type="submit" name="Proses" value="Proses" class="btn btn-primary">Proses</button>
                </form>
            </div>
        </div>
    </div>
@endsection
