@extends('dashboard-admin.index')

@section('title', 'Teacher Detail')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher Detail</h1>
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
                        <td>{{ $teacherDetail->name }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Jenis Kelamin :</th>
                        <td>{{ $teacherDetail->gender }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Nip :</th>
                        <td>{{ $teacherDetail->nip }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">No HP :</th>
                        <td>{{ $teacherDetail->no_hp }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Alamat :</th>
                        <td>{{ $teacherDetail->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="w-15">Email :</th>
                        <td>{{ $teacherDetail->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
