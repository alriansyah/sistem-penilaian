@extends('dashboard-admin.index')

@section('title', 'Mapel Add')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Mata Pelajaran Add</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/mapel" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Kelas</label>
                <select name="class_id" id="class_id" class="form-control @error('class_id') is-invalid @enderror">
                    <option value="">Select one</option>
                    @foreach ($classList as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>

                @error('class_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
