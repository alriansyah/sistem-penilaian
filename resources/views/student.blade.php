@extends('dashboard-admin.index')

@section('title', 'Siswa')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Student</h1>
@endsection

@section('content')
    <h5>Ini halaman data siswa</h5>
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $studentList->links() }}
    </div>
@endsection
