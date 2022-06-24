@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Data Pelanggan
            <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
            <a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        </h3>

        <table class="table table-bordered">
            <tr>
            <th>Nama Pelanggan</th>
            <th>Id Golongan</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>KTP</th>
            <th>Seri</th>
            <th>Meteran</th>
            <th>Aktif</th>
            <th>Id User</th>
            <th>Created At</th>
            <th>Updated At</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>                 
                <td>{{ $row->pel_nama}}</td>
                <td>{{ $row->pel_id_gol}}</td>
                <td>{{ $row->pel_alamat}}</td>
                <td>{{ $row->pel_hp}}</td>
                <td>{{ $row->pel_ktp}}</td>
                <td>{{ $row->pel_seri}}</td>
                <td>{{ $row->pel_meteran}}</td>
                <td>{{ $row->pel_aktif}}</td>
                <td>{{ $row->pel_id_user}}</td>
                <td>{{ $row->created_at}}</td>
                <td>{{ $row->updated_at}}</td>                                    
                    <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
