<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mk = MataPelajaran::paginate(15);
        return view('mataPelajaran', ['mkList' => $mk]);
    }
}