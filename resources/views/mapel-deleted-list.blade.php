@extends('dashboard-admin.index')

@section('title', 'Mata Pelajaran Deleted')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Mata Pelajaran Deleted</h1>
@endsection

@section('content')
    <div class="mb-3">
        <a href="/mapel" class="btn btn-primary"><i class="fa-regular fa-circle-left"></i> Kembali</a>
    </div>

    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapelList as $mapel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mapel->name }}</td>
                    <td>
                        <a href="/mapel/{{ $mapel->id }}/restore"><i
                                class="fa-solid fa-trash-can-arrow-up fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div class="my-4">
        {{ $studentList->links() }}
    </div> --}}
@endsection
