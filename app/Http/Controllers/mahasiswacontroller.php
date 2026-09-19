<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $data = Mahasiswa::with('matakuliahs')->get();
        return view('mahasiswa.index', compact('data'));
    }   
}
