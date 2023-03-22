<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClassCreateRequest;
use App\Models\Jurusan;
use Illuminate\Support\Js;

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

    public function create()
    {
        $jurusan = Jurusan::select('id', 'name')->get();
        return view('class-add', ['jurusanList' => $jurusan]);
    }

    public function store(ClassCreateRequest $request)
    {
        $class = ClassRoom::create($request->all());

        if ($class) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new class success.!');
        }

        return redirect('/class');
    }

    public function edit($id)
    {
        $class = ClassRoom::with('jurusan')->findOrFail($id);
        $jurusan = Jurusan::where('id', '!=', $class->jurusan_id)->select('id', 'name')->get();
        return  view('class-edit', ['classEdit' => $class, 'jurusanList' => $jurusan]);
    }

    public function update(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($id);
        
        $class->update($request->all());

        if ($class) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit class success.!');
        }

        return redirect('/class');
    }
}