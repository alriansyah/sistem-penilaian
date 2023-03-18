@extends('dashboard-admin.index')

@section('title', 'Student Add')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Student Add</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/student" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Jenis Kelamin</label>
                <select id="gender" name="gender" id="gender"
                    class="form-control @error('gender') is-invalid @enderror">
                    <option value="">Select one</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nis" class="label-control">NIS</label>
                <input type="number" id="nis" name="nis"
                    class="form-control @error('nis') is-invalid @enderror">

                @error('nis')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="no_hp class="label-control">NO HP</label>
                <input type="number" id="no_hp" name="no_hp"
                    class="form-control @error('no_hp') is-invalid @enderror">

                @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="alamat" class="label-control">Alamat</label>
                <input type="text" id="alamat" name="alamat"
                    class="form-control @error('alamat') is-invalid @enderror">

                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="foto" class="label-control">Foto</label>
                <input class="form-control @error('title') is-invalid @enderror" type="file" name="foto"
                    id="foto">
            </div>

            <div class="mb-4">
                <label for="email" class="label-control">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror">

                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Password</label>
                <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror">

                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Role</label>
                <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
                    <option value="">Select one</option>
                    @foreach ($roleList as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>

                @error('role_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
