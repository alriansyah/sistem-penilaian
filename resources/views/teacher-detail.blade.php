@extends('dashboard-admin.index')

@section('title', 'Teacher Detail')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher Detail</h1>
@endsection

@section('content')
    <div class="container-fluid d-flex align-items-center p-3 justify-content-between w-100 bg-success rounded border-box">
        <div class="container reset w-30 border-box">
            @if ($teacherDetail->foto != '')
                <img src="{{ asset('storage/post-image/' . $teacherDetail->foto) }}" class="w-100 rounded" alt="">
            @else
                <img src="{{ asset('images/default.png') }}" class="w-100 rounded" alt="">
            @endif
        </div>
        <div class="container reset w-65">
            <table class="table table-hover table-borderless text-white">
                <tbody>
                    <tr>
                        <th class="w-25">Nama :</th>
                        <td>{{ $teacherDetail->name }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Jenis Kelamin :</th>
                        <td>{{ $teacherDetail->gender }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Nip :</th>
                        <td>{{ $teacherDetail->nip }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">No HP :</th>
                        <td>{{ $teacherDetail->no_hp }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Alamat :</th>
                        <td>{{ $teacherDetail->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Email :</th>
                        <td>{{ $teacherDetail->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
