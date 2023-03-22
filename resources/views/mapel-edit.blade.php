@extends('dashboard-admin.index')

@section('title', 'Mapel Edit')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Mata Pelajaran Edit</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/mapel/{{ $mapelEdit->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $mapelEdit->name }}">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Kelas</label>
                <select name="class_id" id="class_id" class="form-control @error('class_id') is-invalid @enderror">
                    @if ($mapelEdit->class != null)
                        <option value="{{ $mapelEdit->class->id }}">{{ $mapelEdit->class->name }}</option>
                    @else
                        <option value="{{ $mapelEdit->class }}">{{ $mapelEdit->class }}</option>
                    @endif

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
