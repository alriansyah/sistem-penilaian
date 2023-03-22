<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JurusanCreateRequest;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::paginate(15);
        return view('jurusan', ['jurusanList' => $jurusan]);
    }

    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan-detail', ['jurusanDetail' => $jurusan]);
    }

    public function create()
    {
        return view('jurusan-add');
    }

    public function store(JurusanCreateRequest $request)
    {
        $jurusan = Jurusan::create($request->all());

        if ($jurusan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new jurusan success.!');
        }

        return redirect('/jurusan');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan-edit', ['jurusanEdit' => $jurusan]);
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());

        if ($jurusan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit jurusan success.!');
        }

        return redirect('/jurusan');
    }
}