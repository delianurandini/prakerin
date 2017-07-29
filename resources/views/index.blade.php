@extends('layouts.master')
@section('isi')
	
	@foreach($ortu as $data)<hr>
	Nama Ibu : {{$data->nama_ibu}}<br>
	Nama Ayah : {{$data->nama_ayah}}<br>
	Umur Ibu : {{$data->umur_ibu}}<br>
	Umur Ayah : {{$data->umur_ayah}}<br>
	Nama Anak :
	@foreach($data->siswa as $key)
	<li>{{$key->nama}}</li>
	@endforeach
	<hr>
	@endforeach
@endsection
