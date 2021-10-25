<?php

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/home', function () {
    $dosen = Dosen::all();
    return view('home', compact('dosen'));
})->name("home");

Route::get('/jurusan', function() {
    return view('jurusan');
})->name('jurusan');

Route::get('/prodi', function () {
    return view('prodi');
})->name("prodi");

Route::post("/tambah-dosen", function (Request $request) {
    Dosen::create([
        "niph" => $request->niph,
        "nama" => $request->nama,
        "jurusan" => $request->jurusan,
        "program_studi" => $request->program_studi
    ]);
    return back();
});
