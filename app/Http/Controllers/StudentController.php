<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::paginate(15);
        return view('student', ['studentList' => $student]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student-detail', ['studentDetail' => $student]);
    }

    public function create()
    {
        $role = Role::select('id', 'name')->get();
        return view('student-add', ['roleList' => $role]);
    }

    public function store(StudentCreateRequest $request)
    {
        $newName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('post-image', $newName);
        }

        $student = Student::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'nis' => $request->nis,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $request['foto'] = $newName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($student) {
            Session::flash('status', 'success'); // flash('keyword', 'value')
            Session::flash('message', 'Add new siswa success.!');
        }

        return redirect('/student');
    }
}