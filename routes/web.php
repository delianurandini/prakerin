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

Route::get('testmodel', function(){
    $a = App\post::all();
    return $a;
});

Route::get('id', function(){
    $b=App\post::find(1);
    return $b;
});

Route::get('title', function(){
    $c=App\post::where('title','like','cepat nikah')->get();
    return $c;
});

Route::get('ubah', function(){
    $post=App\post::find(1);
    $post ->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('tambah', function(){
    $post = new App\post;
    $post->title="7 amalan pembuka jodoh";
    $post->content="shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

Route::get('cektampilan', function(){
    return view('layouts.master');
});

Route::get('/halo', function(){
    return view('index');
});

Route::get('/orangtua', function(){
    $ortu = App\orangtua::all();
    foreach ($ortu as $key) {
        echo $key->nama_ayah;
        echo " dengan ";
        echo $key->nama_ibu;
        echo " mempunyai anak ";
        foreach ($key->siswa as $data) {
            echo "<li>".$data->nama."</li>";
            echo "<hr>";
        }
    }
});

Route::get('/index', 'mycontroller@index');
Route::get('/index2', 'mycontroller@tampilmodel');
Route::get('/index3', 'mycontroller@tampilview');
Route::get('/index4', 'mycontroller@percobaan');