<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Student;
use App\Models\MataPelajaran;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\NilaiCreateRequest;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $student = Student::select('id', 'name')->paginate(20);
        $nilai = Nilai::with(['mapel:id,name', 'student:id,name'])->get();
        return view('nilai', ['nilaiList' => $nilai, 'studentList' => $student]);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $list = Nilai::with('mapel:id,name', 'student:id,name')->select('mapel_id', 'student_id')->get();
        $mapel = MataPelajaran::select('id', 'name')->get();

        return view('nilai-edit', ['nilaiList' => $list, 'mapelList' => $mapel, 'studentList' => $student]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Nilai::create($request->all());

        if ($siswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new nilai success.!');
        }

        return redirect('/nilai');
    }

    // public function create()
    // {
    //     $nilai = Nilai::with('mapel:id,name', 'student:id,name')->select('mapel_id', 'student_id')->get();
    //     $student = Student::select('id', 'name')->get();
    //     $mapel = MataPelajaran::select('id', 'name')->get();
    //     return view('nilai-add', ['studentList' => $student, 'mapelList' => $mapel, 'nilaiList' => $nilai]);
    // }

    // public function store(NilaiCreateRequest $request)
    // {
    //     $siswa = Nilai::create($request->all());

    //     if ($siswa) {
    //         Session::flash('status', 'success');
    //         Session::flash('message', 'Add new nilai success.!');
    //     }

    //     return redirect('/nilai');
    // }
}