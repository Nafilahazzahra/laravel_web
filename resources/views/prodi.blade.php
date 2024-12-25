@extends('layouts.main')
@section('content')
    <h1>Data Program Studi</h1>
    <table class="table table-bordered mt-3 table-striped">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodis->firstItem() + $loop->index }}</td>
                    <td>{{ $prodi->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $prodis->links() }}
@endsection