<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::paginate(15);
        return view('class', ['classList' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class-detail', ['classDetail' => $class]);
    }
}