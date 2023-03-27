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

    public function destroy($id)
    {
        $deletedJurusan = Jurusan::findOrFail($id);
        $deletedJurusan->delete();

        if ($deletedJurusan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete jurusan success.!');
        }

        return redirect('/jurusan');
    }

    public function deletedJurusan()
    {
        $deletedJurusan = Jurusan::onlyTrashed()->get();

        return view('jurusan-deleted-list', ['jurusanList' => $deletedJurusan]);
    }

    public function restore($id)
    {
        $deletedJurusan = Jurusan::withTrashed()->where('id', $id)->restore();
        if ($deletedJurusan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore jurusan success.!');
        }

        return redirect('/jurusan');
    }
}