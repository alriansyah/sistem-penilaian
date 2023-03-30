@extends('dashboard-admin.index')

@section('title', 'Teacher Edit')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher Edit</h1>
@endsection

@section('content')
    <div class="container col-8 m-0">
        <form action="/teacher/{{ $teacherList->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="name" class="label-control">Nama</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $teacherList->name }}">

                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Jenis Kelamin</label>
                <select id="gender" name="gender" id="gender"
                    class="form-control @error('gender') is-invalid @enderror">
                    <option value="{{ $teacherList->gender }}">{{ $teacherList->gender }}</option>
                    @if ($teacherList->gender == 'Laki-laki')
                        <option value="Perempuan">Perempuan</option>
                    @else
                        <option value="Laki-laki">Laki-laki</option>
                    @endif
                </select>

                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nip" class="label-control">Nip</label>
                <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror"
                    value="{{ $teacherList->nip }}">

                @error('nip')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="no_hp" class="label-control">NO HP</label>
                <input type="number" id="no_hp" name="no_hp"
                    class="form-control @error('no_hp') is-invalid @enderror" value="{{ $teacherList->no_hp }}">

                @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="alamat" class="label-control">Alamat</label>
                <input type="text" id="alamat" name="alamat"
                    class="form-control @error('alamat') is-invalid @enderror" value="{{ $teacherList->alamat }}">

                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="foto" class="label-control">Foto</label>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto"
                    value="{{ $teacherList->foto }}">

                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="label-control">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ $teacherList->email }}">

                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="label-control">Password</label>
                <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror">

                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="label-control">Role</label>
                <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
                    @if ($teacherList->role != null)
                        <option value="{{ $teacherList->role->id }}">{{ $teacherList->role->name }}</option>
                    @else
                        <option value="{{ $teacherList->role }}">{{ $teacherList->role }}</option>
                    @endif

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
