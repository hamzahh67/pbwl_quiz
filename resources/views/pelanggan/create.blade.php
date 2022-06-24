@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Pelanggan</h3>
        <form action="{{ url('/pelanggan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" name="pel_nama" ></>
            </div>
            <div class="mb-3">
                <label>ID Golongan</label>
                <input type="text" class="form-control" name="pel_id_gol" ></>
            </div>
            <div class="mb-3">
                <label>No Pelanggan</label>
                <input type="text" class="form-control" name="pel_no" ></>
            </div>            
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="pel_alamat" ></>
            </div>
            <div class="mb-3">
                <label>No Hp</label>
                <input type="text" class="form-control" name="pel_hp" ></>
            </div>
            <div class="mb-3">
                <label>No KTP</label>
                <input type="text" class="form-control" name="pel_ktp" ></>
            </div>
            <div class="mb-3">
                <label>Seri</label>
                <input type="text" class="form-control" name="pel_seri" ></>
            </div>
            <div class="mb-3">
                <label>Meteran</label>
                <input type="text" class="form-control" name="pel_meteran" ></>
            </div>
            <div class="mb-3">
                <label>Aktif</label>
                <input type="text" class="form-control" name="pel_aktif" ></>
            </div>                                                                                    
            <div class="mb-3">
                <label>ID User</label>
                <input type="text" class="form-control" name="pel_id_user" ></>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
