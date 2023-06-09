<?php

namespace App\Http\Controllers;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use App\Models\MataPelajaran;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MapelCreateRequest;
use App\Models\ClassRoom;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapel = MataPelajaran::paginate(15);
        return view('mataPelajaran', ['mapelList' => $mapel]);
    }

    public function show($id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        return view('mapel-detail', ['mapelDetail' => $mapel]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('mapel-add', ['classList'  => $class]);
    }

    public function store(MapelCreateRequest $request)
    {
        $mapel = MataPelajaran::create($request->all());

        if ($mapel) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new mata pelajaran success.!');
        }

        return redirect('/mapel');
    }

    public function edit($id)
    {
        $mapel = MataPelajaran::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $mapel->class_id)->select('id', 'name')->get();

        return view('mapel-edit', ['mapelEdit' => $mapel, 'classList' => $class]);
    }

    public function update(Request $request, $id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        $mapel->update($request->all());

        if ($mapel) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Mata Pelajaran success.!');
        }

        return redirect('/mapel');
    }

    public function destroy($id)
    {
        $deletedMapel = MataPelajaran::findOrFail($id);
        $deletedMapel->delete();
        
        if ($deletedMapel) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete mapel success.!');
        }

        return redirect('/mapel');
    }

    public function deletedMapel()
    {
        $deletedMapel = MataPelajaran::onlyTrashed()->get();
        
        return view('mapel-deleted-list', ['mapelList' => $deletedMapel]);
    }

    public function restore($id)
    {
        $deletedMapel = MataPelajaran::withTrashed()->where('id', $id)->restore();

        if ($deletedMapel) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore mata pelajaran success.!');
        }

        return redirect('/mapel');
    }
}