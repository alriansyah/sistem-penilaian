@extends('dashboard-admin.index')

@section('title', 'Teacher')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher</h1>
@endsection

@section('content')
    <div class="mb-3">
        <a href="/teacher-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
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
                <th>Gender</th>
                <th>Nip</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->nip }}</td>
                    <td>
                        <a href="/teacher-detail/{{ $teacher->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                        <a href="/teacher-edit/{{ $teacher->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $teacherList->links() }}
    </div>
@endsection
