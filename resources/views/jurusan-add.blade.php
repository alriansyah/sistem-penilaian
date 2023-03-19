@extends('dashboard-admin.index')

@section('title', 'Jurusan Add')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Jurusan Add</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/jurusan" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
