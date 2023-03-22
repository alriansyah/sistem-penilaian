@extends('dashboard-admin.index')

@section('title', 'Class Edit')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Class Edit</h1>
@endsection

@section('content')
    {{ $classEdit }}
    {{ $jurusanList  }}

    <div class="container col-8 m-0">
        <form action="/class/{{ $classEdit->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $classEdit->name }}">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Jurusan</label>
                <select name="jurusan_id" id="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                    @if ($classEdit->jurusan != null)
                        <option value="{{ $classEdit->jurusan->id }}">{{ $classEdit->jurusan->name }}</option>
                    @else
                        <option value="{{ $classEdit->jurusan }}">{{ $classEdit->jurusan }}</option>
                    @endif

                    @foreach ($jurusanList as $jurusan)
                        <option value="{{ $jurusan->id }}">{{ $jurusan->name }}</option>
                    @endforeach
                </select>

                @error('jurusan_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
