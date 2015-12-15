<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Dosen;
use App\Mahasiswa;
use App\User;
use App\ProgramStudi;
use App\MataKuliah;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $admin = Admin::create();
        $user = User::create([
            'nama' => 'feber',
            'email' => 'feber@a.a',
            'password' => bcrypt('feber'),
            'userable_id' => $admin->id,
            'userable_type' => User::TYPE_ADMIN,
        ]);

        $dosen = Dosen::create([
            'nip' => 'd1',
        ]);
        $user = User::create([
            'nama' => 'mahar',
            'email' => 'mahar@a.a',
            'password' => bcrypt('mahar'),
            'userable_id' => $dosen->id,
            'userable_type' => User::TYPE_DOSEN,
        ]);

        $mahasiswa = Mahasiswa::create([
            'nim' => 'm1',
        ]);
        $user = User::create([
            'nama' => 'dimas',
            'email' => 'dimas@a.a',
            'password' => bcrypt('dimas'),
            'userable_id' => $mahasiswa->id,
            'userable_type' => User::TYPE_MAHASISWA,
        ]);

        $prodi = ProgramStudi::create([
            'nama' => 'S1 Teknik Informatika',
            'deskripsi' => 'Informatika adalah.....',
        ]);
        $makul = MataKuliah::create([
            'nama' => 'Desain Analisis Algoritma',
            'kode' => 'CSG1xx',
            'deskripsi' => 'Main algoritma...',
            'prodi_id' => $prodi->id
        ]);
        Model::reguard();
    }
}
