@extends('dashboard-admin.index')

@section('title', 'Class')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Class</h1>
@endsection

@section('content')
    <h5>Ini halaman data kelas</h5>

    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $classList->links() }}
    </div>
@endsection
