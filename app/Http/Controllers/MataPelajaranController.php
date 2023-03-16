<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

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
}