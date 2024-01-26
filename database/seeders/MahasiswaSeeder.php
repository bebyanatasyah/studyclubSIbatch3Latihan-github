<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // DB::table('table_mahasiswa')->insert([
        //     'nama'=> "Beby Anatasyah",
        //     'nim'=> "F1E122010",
        //     'kelas'=> "R001",
        //     'deskripsi'=> "tuntas"
        // ]);

        DB::table('table_mahasiswa')->insert([
            'nama'=> "Megawati",
            'nim'=> "F1E122023",
            'kelas'=> "R001",
            'deskripsi'=> "tuntas"
        ]);

        DB::table('table_mahasiswa')->insert([
            'nama'=> "abelya",
            'nim'=> "F1E122009",
            'kelas'=> "R001",
            'deskripsi'=> "tuntas"
        ]);
    }
}
