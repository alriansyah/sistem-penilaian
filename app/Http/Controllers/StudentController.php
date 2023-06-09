<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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
            $newName = $request->name . '-' . now()->timestamp . '-' . 'student' . '.' . $extension;
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
            'role_id' => $request->role_id
        ]);

        if ($student) {
            Session::flash('status', 'success'); // flash('keyword', 'value')
            Session::flash('message', 'Add new student success.!');
        }

        return redirect('/student');
    }

    public function edit($id)
    {
        $student = Student::with('role')->findOrFail($id);
        $role = Role::where('id', '!=', $student->role_id)->select('id', 'name')->get();
        return view('student-edit', ['studentList' => $student, 'roleList' => $role]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $oldFoto = $student->foto;

        $newName = $oldFoto;
        if ($request->file('foto')) {
            if ($oldFoto) {
                Storage::delete('post-image/' . $oldFoto);
            }
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '-' . 'student' . '.' . $extension;
            $request->file('foto')->storeAs('post-image', $newName);
        };

        $student->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'nis' => $request->nis,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $request['foto'] = $newName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);

        if ($student) {
            Session::flash('status', 'success'); // flash('keyword', 'value')
            Session::flash('message', 'Update student success.!');
        }

        return redirect('/student');
    }

    public function destroy($id)
    {
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        // hapus value
        $deletedStudent->foto = null;
        $deletedStudent->save();
        
        // hapus image in storage 
        $oldFoto = $deletedStudent->foto;
        Storage::delete('post-image/' . $oldFoto);

        if ($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete student success.!');
        }

        return redirect('/student');
    }

    public function deletedStudent()
    {
        $deletedStudent = Student::onlyTrashed()->get();
        
        return view('student-deleted-list', ['studentList' => $deletedStudent]);
    }

    public function restore($id)
    {
        $deletedStudent = Student::withTrashed()->where('id', $id)->restore();
        if ($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore student success.!');
        }
        
        return redirect('/student');
    }
}