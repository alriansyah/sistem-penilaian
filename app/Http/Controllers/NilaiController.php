<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Student;
use App\Models\MataPelajaran;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\NilaiCreateRequest;

class NilaiController extends Controller
{
    public function index()
    {
        $student = Student::select('id', 'name')->paginate(20);
        $nilai = Nilai::with(['mapel:id,name', 'student:id,name'])->get();
        return view('nilai', ['nilaiList' => $nilai, 'studentList' => $student]);
    }

    public function create()
    {
        // $nilai = Nilai::select('mapel_id', 'student_id')->get();
        $student = Student::select('id', 'name')->get();
        $mapel = MataPelajaran::select('id', 'name')->get();
        return view('nilai-add', ['studentList' => $student, 'mapelList' => $mapel]);
    }

    public function store(NilaiCreateRequest $request)
    {
        $siswa = Nilai::create($request->all());

        if ($siswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new nilai success.!');
        }

        return redirect('/nilai');
    }
}