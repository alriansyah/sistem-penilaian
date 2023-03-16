<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

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
}