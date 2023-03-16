@extends('dashboard-admin.index')

@section('title', 'Jurusan Detail')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Jurusan Detail</h1>
@endsection

@section('content')
    <div class="container-fluid w-100 reset">
        <div class="container reset w-70">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th class="w-30">Nama :</th>
                        <td class="w-70">{{ $jurusanDetail->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
