<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\prodiController;

Route::get('/', function () {
    $data = ['nama' => "Nurmalinda", 'foto' => 'Linda.jpeg'];
    return view('dashboard', compact('data'));
}); 

//Route::get('/mahasiswa', function () {
    //return view('mahasiswa', ['nama' => "Nurmalinda", 'foto' => 'Linda.jpeg']);
//}); 

//Route::get('/prodi', function () {
    //return view('prodi', ['nama' => "Nurmalinda", 'foto' => 'Linda.jpeg']);
//});   

Route::get('/mahasiswa', [mahasiswaController::class,'index']);
Route::get('/prodi', [prodiController::class,'index']);

