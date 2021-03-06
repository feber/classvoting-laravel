<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataKuliah;
use Auth;

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
        $account = Auth::user()->userable;
        if ($account->voted) {
            return redirect('vote');
        }
        $makuls = MataKuliah::where('prodi_id', $account->prodi_id)->get();

        return view('vote.start', compact('makuls'));
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
        foreach ($request->vote as $id) {
            $mk = MataKuliah::findOrFail($id);
            $mk->peminat += 1;
            $mk->save();
        }
        $account = Auth::user()->userable;
        $account->voted = true;
        $account->save();

        return redirect('vote');
    }
}
