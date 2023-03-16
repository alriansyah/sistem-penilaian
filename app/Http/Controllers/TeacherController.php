<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::paginate(15);
        return view('teacher', ['teacherList' => $teacher]);
    }
}