@extends('dashboard-admin.index')

@section('title', 'Student')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Student</h1>
@endsection

@section('content')
    <div class="mb-3 d-flex justify-content-between">
        <a href="/student-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
        <a href="/student-deleted" class="btn btn-danger">Show Deleted Data</a>
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
                <th>Nis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>
                        <a href="/student-detail/{{ $student->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                        <a href="/student-edit/{{ $student->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                        <a href="/student-delete/{{ $student->id }}" data-bs-toggle="modal"
                            data-bs-target="#student-delete-/student/{{ $student->id }}"><i
                                class="fa-solid fa-trash-can fa-lg"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="student-delete-/student/{{ $student->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin untuk menghapus data student : {{ $student->name }}.?
                                    </div>
                                    <div class="modal-footer">

                                        <form action="/student-destroy/{{ $student->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="/student" class="btn btn-primary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $studentList->links() }}
    </div>
@endsection
