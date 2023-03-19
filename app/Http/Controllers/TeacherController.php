<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TeacherCreateRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::paginate(15);
        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-detail', ['teacherDetail' => $teacher]);
    }

    public function create()
    {
        $role = Role::select('id', 'name')->get();
        return view('teacher-add', ['roleList' => $role]);
    }

    public function store(TeacherCreateRequest $request)
    {
        $newName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp.'-'.'teacher'. '.'. $extension;
            $request->file('foto')->storeAs('post-image', $newName);
        }

        $teacher = Teacher::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $request['foto'] = $newName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rule_id' => $request->rule_id
        ]);

        if ($teacher) {
            Session::flash('status', 'success'); // flash('keyword', 'value')
            Session::flash('message', 'Add new teacher success.!');
        }

        return redirect('/teacher');
    }
}