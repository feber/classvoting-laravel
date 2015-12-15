<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class VoteController extends Controller
{
    /**
     * Vote landing page for Mahasiswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vote.index');
    }

    /**
     * Show Mata Kuliah on vote page.
     *
     * @return \Illuminate\Http\Response
     */
    public function start()
    {
        // TODO filter by nim
        // kalo if nimnya prodi berapa
        // kalo yang lain berapa
        // ambil kelas buat vote dengan prodi yang sama

        return $kelas = Kelas::all();

        return view('vote.start', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO loop through input
        // set status mhs ini udah vote
    }
}
