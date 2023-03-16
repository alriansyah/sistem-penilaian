<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapel = MataPelajaran::paginate(15);
        return view('mataPelajaran', ['mapelList' => $mapel]);
    }
}