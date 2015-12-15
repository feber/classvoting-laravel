<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Dosen;
use App\Mahasiswa;
use DB;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = substr(User::TYPE_DOSEN, 4);
        $mahasiswa = substr(User::TYPE_MAHASISWA, 4);
        $roles = [
            User::TYPE_MAHASISWA => $mahasiswa,
            User::TYPE_DOSEN => $dosen,
            User::TYPE_ADMIN => substr(User::TYPE_ADMIN, 4),
        ];

        return view('user.create', compact('dosen', 'mahasiswa', 'roles'));
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
        DB::transaction(function () use ($request) {
            $account = null;
            if ($request->role === User::TYPE_MAHASISWA) {
                $account = Mahasiswa::create(['nim' => $request->nim]);
            } elseif ($request->role === User::TYPE_DOSEN) {
                $account = Dosen::create(['nip' => $request->nip]);
            } else {
                $account = Admin::create();
            }

            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->userable_id = $account->id;
            $user->userable_type = get_class($account);
            $user->save();
        });

        return redirect('user');
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
        $user = User::findOrFail($id);

        return view('user.show', compact('user'));
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
        $user = User::findOrFail($id);
        $dosen = User::TYPE_DOSEN;
        $mahasiswa = User::TYPE_MAHASISWA;

        return view('user.edit', compact('user', 'dosen', 'mahasiswa'));
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
        DB::transaction(function () use ($request, $id) {
            $user = User::findOrFail($id);
            $user->nama = $request->nama;
            $user->email = $request->email;
            // if password changed
            if ($request->password !== '') {
                $user->password = bcrypt($request->password);
            }
            $user->save();

            $account = $user->userable;
            if (get_class($account) === User::TYPE_MAHASISWA) {
                $account->nim = $request->nim;
            } elseif (get_class($account) === User::TYPE_DOSEN) {
                $account->nip = $request->nip;
            }
            $account->save();
        });

        return redirect('user');
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
        DB::transaction(function () use ($id) {
            $user = User::findOrFail($id);
            $user->userable->delete();
            $user->delete();
        });

        return redirect('user');
    }
}
