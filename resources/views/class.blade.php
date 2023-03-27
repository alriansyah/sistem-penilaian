@extends('dashboard-admin.index')

@section('title', 'Class')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Class</h1>
@endsection

@section('content')
    <div class="mb-3 d-flex justify-content-between">
        <a href="/class-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
        <a href="/class-deleted" class="btn btn-danger">Show Deleted Data</a>
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
                        <a href="/class-edit/{{ $class->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                        <a href="/class-delete/{{ $class->id }}" data-bs-toggle="modal"
                            data-bs-target="#class-delete-/class/{{ $class->id }}"><i
                                class="fa-solid fa-trash-can fa-lg"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="class-delete-/class/{{ $class->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin untuk menghapus data kelas : {{ $class->name }}.?
                                    </div>
                                    <div class="modal-footer">

                                        <form action="/class-destroy/{{ $class->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="/class" class="btn btn-primary">Cancel</a>
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
        {{ $classList->links() }}
    </div>
@endsection
