@extends('dashboard-admin.index')

@section('title', 'Teacher')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher</h1>
@endsection

@section('content')
    <h5>Ini halaman data guru</h5>
    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Nip</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->nip }}</td>
                    <td>{{ $teacher->no_hp }}</td>
                    <td>{{ $teacher->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $teacherList->links() }}
    </div>
@endsection
