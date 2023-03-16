@extends('dashboard-admin.index')

@section('title', 'Mata Pelajaran')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Mata Pelajaran</h1>
@endsection

@section('content')
    <h5>Ini halaman data mata pelajaran</h5>

    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mkList as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $mkList->links() }}
    </div>
@endsection
