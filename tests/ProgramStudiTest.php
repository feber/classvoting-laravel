<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProgramStudiTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->route('GET', 'prodi.index');
        $this->see('Tambah program studi');
        $this->submitForm('Tambah', ['nama' => 'nama1', 'deskripsi' => 'deskripsi1']);
        $this->action('GET', 'ProgramStudiController@index');
        $this->see('nama');
        $this->see('deskripsi');
    }
}
