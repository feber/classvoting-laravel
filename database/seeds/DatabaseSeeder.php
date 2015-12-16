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

        $if = ProgramStudi::create([
            'nama' => 'S1 Teknik Informatika',
            'deskripsi' => 'Informatika adalah.....',
        ]);
        $ik = ProgramStudi::create([
            'nama' => 'S1 Ilmu Komputasi',
            'deskripsi' => 'IK adalah.....',
        ]);

        $admin = Admin::create();
        $user = User::create([
            'nama' => 'feber',
            'username' => 'feber',
            'password' => bcrypt('feber'),
            'userable_id' => $admin->id,
            'userable_type' => User::TYPE_ADMIN,
        ]);

        $dosen = Dosen::create([
            'nip' => '053',
            'prodi_id' => $if->id,
        ]);
        $user = User::create([
            'nama' => 'mahar',
            'username' => 'mahar',
            'password' => bcrypt('mahar'),
            'userable_id' => $dosen->id,
            'userable_type' => User::TYPE_DOSEN,
        ]);
        $dosen = Dosen::create([
            'nip' => '054',
            'prodi_id' => $ik->id,
        ]);
        $user = User::create([
            'nama' => 'sendy',
            'username' => 'sendy',
            'password' => bcrypt('sendy'),
            'userable_id' => $dosen->id,
            'userable_type' => User::TYPE_DOSEN,
        ]);

        $mahasiswa = Mahasiswa::create([
            'nim' => '1103',
            'prodi_id' => $if->id,
        ]);
        $user = User::create([
            'nama' => 'dimas',
            'username' => 'dimas',
            'password' => bcrypt('dimas'),
            'userable_id' => $mahasiswa->id,
            'userable_type' => User::TYPE_MAHASISWA,
        ]);
        $mahasiswa = Mahasiswa::create([
            'nim' => '1107',
            'prodi_id' => $ik->id,
        ]);
        $user = User::create([
            'nama' => 'ali',
            'username' => 'ali',
            'password' => bcrypt('ali'),
            'userable_id' => $mahasiswa->id,
            'userable_type' => User::TYPE_MAHASISWA,
        ]);

        MataKuliah::create([
            'nama' => 'Desain Analisis Algoritma',
            'kode' => 'CSG1xx',
            'deskripsi' => 'Main algoritma...',
            'prodi_id' => $if->id,
        ]);
        MataKuliah::create([
            'nama' => 'Algoritma Struktur Data',
            'kode' => 'CSG2xx',
            'deskripsi' => 'ASD...',
            'prodi_id' => $if->id,
        ]);
        MataKuliah::create([
            'nama' => 'Data Mining',
            'kode' => 'CSH1xx',
            'deskripsi' => 'Main data...',
            'prodi_id' => $ik->id,
        ]);
        Model::reguard();
    }
}
