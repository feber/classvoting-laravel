<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\MataKuliah;
use Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::where('dosen_id', Auth::user()->id)->get();

        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makuls = MataKuliah::lists('nama', 'id')->toArray();

        return view('kelas.create', compact('makuls'));
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
        Kelas::create([
            'nama' => $request->nama,
            'kapasitas' => $request->kapasitas,
            'makul_id' => $request->makul_id,
            'dosen_id' => Auth::user()->id,
        ]);

        return redirect('kelas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        if ($kelas->dosen_id !== Auth::user()->id) {
            return redirect('kelas');
        }
        $makuls = MataKuliah::lists('nama', 'id')->toArray();

        return view('kelas.edit', compact('kelas', 'makuls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'kapasitas' => $request->kapasitas,
            'makul_id' => $request->makul_id,
        ]);

        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::destroy($id);

        return redirect('kelas');
    }
}
