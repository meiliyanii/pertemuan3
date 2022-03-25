<?php

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
$mhs =[
    1=>['nama'=>'Budiono','jurusan'=>'Sistem Informasi'],
    2=>['nama'=>'Susanti','jurusan'=>'Sistem Informasi'],
    3=>['nama'=>'Stevan','jurusan'=>'Informatika'],
]

Route::get('/', function () {
    return view('welcome', ['nama'=>'Budiono','jurusan'=>'Sistem Informasi']);
});

Route::get('/Mahasiswa', function () {
    return view('welcome', ['nama'=>'Mahasiswa Budiono','jurusan'=>'Sistem Informasi']);
});
