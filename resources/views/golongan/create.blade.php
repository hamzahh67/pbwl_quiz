@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Golongan</h3>
        <form action="{{ url('/golongan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Kode Golongan</label>
                <input type="text" class="form-control" name="gol_kode">
            </div>
            <div class="mb-3">
                <label>Nama Golongan</label>
                <input type="text" class="form-control" name="gol_nama">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
