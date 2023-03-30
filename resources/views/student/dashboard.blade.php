@extends('student.index')

@section('title', 'Student Dashboard')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
@endsection

@section('name')
    {{ Auth::user()->name }}
@endsection

@section('foto-profil')
    @if (Auth::user()->foto != '' && Auth::user()->foto != null)
        <img class="img-profile rounded-circle" src="{{ asset('storage/post-image/' . Auth::user()->foto) }}" class="w-100 rounded" alt="">
    @else
        <img class="img-profile rounded-circle" src="{{ asset('images/default.png') }}" class="w-100 rounded" alt="">
    @endif
@endsection

@section('content')
    {{-- <p>{{ Auth::user()->foto }}</p> --}}
    <div class="container-fluid d-flex align-items-center p-3 justify-content-between w-100 bg-success rounded border-box">
        <div class="container reset w-30 border-box">
            @if (Auth::user()->foto != '' && Auth::user()->foto != null)
                <img src="{{ asset('storage/post-image/' . Auth::user()->foto) }}" class="w-100 rounded" alt="">
            @else
                <img src="{{ asset('images/default.png') }}" class="w-100 rounded" alt="">
            @endif
        </div>
        <div class="container reset w-65">
            <table class="table table-hover table-borderless text-white">
                <tbody>
                    <tr>
                        <th class="w-25">Nama :</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Jenis Kelamin :</th>
                        <td>{{ Auth::user()->gender }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Nis :</th>
                        <td>{{ Auth::user()->nis }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">No HP :</th>
                        <td>{{ Auth::user()->no_hp }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Alamat :</th>
                        <td>{{ Auth::user()->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="w-25">Email :</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
