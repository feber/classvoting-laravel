<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makuls = MataKuliah::all();

        return view('makul.index', compact('makuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = ProgramStudi::lists('nama', 'id')->toArray();

        return view('makul.create', compact('prodis'));
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
        MataKuliah::create($request->all());

        return redirect('makul');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makul = MataKuliah::find($id);

        return view('makul.show', compact('makul'));
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
        $prodis = ProgramStudi::lists('nama', 'id')->toArray();
        $makul = MataKuliah::find($id);

        return view('makul.edit', compact('prodis', 'makul'));
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
        $makul = MataKuliah::find($id);
        $makul->update($request->all());

        return redirect('makul');
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
        MataKuliah::destroy($id);

        return redirect('makul');
    }
}
