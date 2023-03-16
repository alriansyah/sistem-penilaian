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
            @foreach ($mapelList as $mapel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mapel->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $mapelList->links() }}
    </div>
@endsection
