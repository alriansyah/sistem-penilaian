@extends('dashboard-admin.index')

@section('title', 'Class')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Class</h1>
@endsection

@section('content')
    <div class="mb-3">
        <a href="/class-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
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
            @foreach ($classList as $class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->name }}</td>
                    <td>
                        <a href="/class-detail/{{ $class->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $classList->links() }}
    </div>
@endsection
