@extends('dashboard-admin.index')

@section('title', 'Nilai Add')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Nilai Add</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/nilai" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <select id="student_id" name="student_id" id="student_id"
                    class="form-control @error('student_id') is-invalid @enderror">
                    <option value="">Select one</option>
                    @foreach ($studentList as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>

                @error('student_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Mata Pelajaran</label>
                <select id="mapel_id" name="mapel_id" id="mapel_id"
                    class="form-control @error('mapel_id') is-invalid @enderror">
                    <option value="">Select one</option>
                    @foreach ($mapelList as $mapel)
                        <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
                    @endforeach
                </select>

                @error('mapel_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nilai" class="label-control">Nilai</label>
                <input type="number" id="nilai" name="nilai"
                    class="form-control @error('nilai') is-invalid @enderror">

                @error('nilai')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
