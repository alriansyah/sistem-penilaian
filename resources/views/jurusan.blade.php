@extends('dashboard-admin.index')

@section('title', 'Jurusan')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Jurusan</h1>
@endsection

@section('content')
    <div class="mb-3">
        <a href="/jurusan-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusanList as $jurusan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jurusan->name }}</td>
                    <td>
                        <a href="/jurusan-detail/{{ $jurusan->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                        <a href="/jurusan-edit/{{ $jurusan->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <div class="my-4">
            {{ $jurusanList->links() }}
        </div>
    </table>
@endsection
