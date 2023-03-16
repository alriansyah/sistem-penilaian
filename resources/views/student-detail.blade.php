@extends('dashboard-admin.index')

@section('title', 'Siswa Detail')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Student Detail</h1>
@endsection

@section('content')
    <div class="container-fluid d-flex align-items-center justify-content-between w-100">
        <div class="container reset w-30">
            <img src="{{ asset('images/default.png') }}" class="w-100" alt="">
        </div>
        <div class="container reset w-65">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th class="w-15">Nama :</th>
                        <td>{{ $studentDetail->name }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Jenis Kelamin :</th>
                        <td>{{ $studentDetail->gender }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Nis :</th>
                        <td>{{ $studentDetail->nis }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">No HP :</th>
                        <td>{{ $studentDetail->no_hp }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Alamat :</th>
                        <td>{{ $studentDetail->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Email :</th>
                        <td>{{ $studentDetail->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
