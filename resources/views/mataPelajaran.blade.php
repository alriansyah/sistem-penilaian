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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapelList as $mapel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mapel->name }}</td>
                    <td>
                        <a href="/mapel-detail/{{ $mapel->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $mapelList->links() }}
    </div>
@endsection
