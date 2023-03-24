@extends('dashboard-admin.index')

@section('title', 'Nilai')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Data Nilai</h1>
@endsection

@section('content')
{{-- {{ $nilaiList }} --}}


    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    {{-- <div class="mb-3 mt-3">
        <a href="/nilai-add" class="btn btn-primary">Tambah Data &nbsp;<i class="fa-solid fa-plus"></i></a>
    </div> --}}

    <table class="table table-hover table-bordered border-light">
        <thead class="bg-dark text-white">
            <tr>
                <th>No.</th>
                <th>Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        @foreach ($nilaiList as $nilai)
                            @if ($student->name == $nilai->student->name)
                                - {{ $nilai->mapel->name }} <br>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($nilaiList as $nilai)
                            @if ($student->name == $nilai->student->name)
                                {{ $nilai->nilai }} <br>
                            @endif
                            {{-- {{ $nilai->nilai }} --}}
                        @endforeach
                    </td>
                    <td>
                        <a href="/nilai-edit/{{ $student->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-4">
        {{ $studentList->links() }}
    </div>
@endsection
