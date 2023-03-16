@extends('dashboard-admin.index')

@section('title', 'Jurusan')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Jurusan</h1>
@endsection

@section('content')
    <h5>Ini halaman data jurusan</h5>
    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusanList as $jurusan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jurusan->name }}</td>
                    <td>
                        <a href="/jurusan-detail/{{ $jurusan->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <div class="my-4">
            {{ $jurusanList->links() }}
        </div>
    </table>
@endsection
