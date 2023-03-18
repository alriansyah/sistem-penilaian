@extends('dashboard-admin.index')

@section('title', 'Siswa Detail')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Student Detail</h1>
@endsection

@section('content')
    <div class="container-fluid d-flex align-items-center p-3 justify-content-between w-100 bg-success rounded border-box">
        <div class="container reset w-30 border-box">
            @if ($studentDetail->foto != '')
                <img src="{{ asset('storage/post-image/' . $studentDetail->foto) }}" class="w-100 rounded" alt="">
            @else
                <img src="{{ asset('images/default.png') }}" class="w-100 rounded" alt="">
            @endif
        </div>
        <div class="container reset w-65">
            <table class="table table-hover table-borderless text-white">
                <tbody>
                    <tr>
                        <th class="w-25">Nama :</th>
                        <td>{{ $studentDetail->name }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Jenis Kelamin :</th>
                        <td>{{ $studentDetail->gender }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Nis :</th>
                        <td>{{ $studentDetail->nis }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">No HP :</th>
                        <td>{{ $studentDetail->no_hp }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Alamat :</th>
                        <td>{{ $studentDetail->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Email :</th>
                        <td>{{ $studentDetail->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
