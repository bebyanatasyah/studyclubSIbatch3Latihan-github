<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function semua()
    {
        $kategori = kategori::all();
        foreach ($kategori as $data) {
            echo $data->id . " " . $data->nama_kategori . '<br>';
        }
    }
}
