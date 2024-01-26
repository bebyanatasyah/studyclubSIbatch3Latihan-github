<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama_kategori'=> "Pakaian",
            'deskripsi'=> "Semua jenis pakaian"
        ]);

        DB::table('kategori')->insert([
            'nama_kategori' => "Pakaian Pria",
            'deskripsi' => "Semua jenis pakaian pria"
        ]);
        //
    }
}
