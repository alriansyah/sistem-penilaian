@extends('dashboard-admin.index')

@section('title', 'Teacher Deleted')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher Deleted</h1>
@endsection

@section('content')
    <div class="mb-3">
        <a href="/teacher" class="btn btn-primary"><i class="fa-regular fa-circle-left"></i> Kembali</a>
    </div>

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
                        <a href="/teacher/{{ $teacher->id }}/restore"><i class="fa-solid fa-trash-can-arrow-up fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="my-4">
        {{ $studentList->links() }}
    </div> --}}
@endsection
