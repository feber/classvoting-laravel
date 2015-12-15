<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kelas;

class VoteController extends Controller
{
    public function index()
    {
        return view('vote.index');
    }

    public function start()
    {
        // TODO filter by nim
        // kalo if nimnya prodi berapa
        // kalo yang lain berapa
        // ambil kelas buat vote dengan prodi yang sama

        return $kelas = Kelas::all();

        return view('vote.start', compact('kelas'));
    }

    public function save(Request $request)
    {
        // TODO loop through input
        // set status mhs ini udah vote

    }
}
