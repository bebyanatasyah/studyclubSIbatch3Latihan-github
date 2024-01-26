<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController2;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//latihan memmbuat route
// Route::get('/studyclub', function () {
//     //return view('welcome');
//     echo 'anda tidak memasukkan nama'.$nama;
// });

// Route::get('/studyclub/{nama}', function ($nama) {
//     //return view('welcome');
//     echo 'Selamat datang di Study Club';
// });

// //latihan mengambil data dari url dengan ekspresi nama harus angka
// Route::get('/studyclub/angka/{nama}', function ($nama) {
//     //return view('welcome');
//     echo 'Selamat datang di Study Club ke-'.$nama;
// })-> where('nama', '[0-9]+');

// //latihan mengambil data dari url dna dikirim ke view
// Route::get('/LatihanKirimData/{title}', function ($title) {
//     return view('welcome',['title'=>$title]);
// });

// //
// Route::get('/LatihanKirimData', function () {
//     return view('welcome',['title'=>'Mahasiswa Sistem Informasi']);
// });

// //latihan blade
// Route::get('/latihanBlade', function () {
//     return view('latihan',['data1'=>0]);
// });

// Route::get('/latihanBlade2', function () {
//     return view('home');
// });

// //latihan templating
// Route::get('/dashboard', function () {
//     return view('index');
// });

//CARA UPDATE, TAMBAH, HAPUS LARAVEL
use App\Http\Controllers\KategoriController;
//latihan menggunakan model
Route::get('/kategori/semua', [KategoriController::class,'semua']);
   

Route::resource('kategori',KategoriController2::class);

use App\Http\Controllers\MahasiswaController;
Route::resource('kategori',MahasiswaController::class);

Route::get('/dashboard',function () {
    return view ('index');
})->name('dashboard');


// //TAMBAH
// Route::get('/kategori/tambah', function () {
//     Kategori::create([
//         'nama_kategori'=> "Pakaian Baru",
//         'deskripsi' => "Semua jenis pakaian baru"
//     ]);
// });

// //UPDATE
// Route::get('/kategori/update/{id}', function ($id) {
//     Kategori::find($id)->update([

//         'nama_kategori'=> "Pakaian Anak",
//         'deskripsi' => "Semua jenis pakaian anak"
//     ]);
// });

// //HAPUS
// Route::get('/kategori/hapus/{id}', function ($id) {
//     Kategori::find($id)->delete();
// });

// //p

// //CARA UPDATE, TAMBAH, HAPUS LARAVEL
// use App\Models\mahasiswa;
// Route::get('/mahasiswa/semua', function () {
//     $mahasiswa = mahasiswa::all();
//     foreach ($mahasiswa as $data) {
//         echo $data->id . ".". $data->nama."<br>";
//         echo $data->nim."<br>";
//         echo $data->kelas."<br>";
//         echo $data->deskripsi."<br>";
//     }
// });

// //TAMBAH
// Route::get('/mahasiswa/tambah', function () {
//     mahasiswa::create([
//         'nama'=> "Gita",
//         'nim'=> "F1E122017",
//         'kelas'=> "R001",
//         'deskripsi'=> "tuntas",
//     ]);
// });

// //UPDATE
// Route::get('/mahasiswa/update/{id}', function ($id) {
//     mahasiswa::find($id)->update([
//         'nama'=> "Megawati",
//         'nim'=> "F1E122024",
//         'kelas'=> "R001",
//         'deskripsi'=> "tuntas"
//     ]);
// });

// //HAPUS
// Route::get('/mahasiswa/hapus/{id}', function ($id) {
//     mahasiswa::find($id)->delete();
// });

// //


   