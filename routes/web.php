<?php

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

Route::get('/about', function(){
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});

Route::get('latihan', function () {
    return view('about');
});

Route::get('/about/1', function () {
    return view('about.satu');
});

Route::get('/about/2', function () {
    return view('about.dua');
});

Route::get('/about/3', function () {
    return view('about.tiga');
});

Route::get('/siswa/{nama}/{sekolah}/{umur}', function ($a,$b,$c) {
    return 'Nama Saya : '.$a.'<br>'
    .'Sekolah : '.$b.'<br>'
    .'Umur : '.$c;
});


Route::get('/nama/{halaman}', function ()  {
   	$a='john';
   return 'Ini Halaman About '.$a;
       
});