@extends('layouts.master')
@section('isi')
<div class="container">
    <div class="row">
          <center><h1>Data Murid</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data Murid
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

          <div class="panel-body">
            <form action="{{route('murid.update',$murid->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              
          <div class="form-group">
            <label class="control-lable">Nama</label>
            <input type="text" name="a" class="form-control" value="{{$murid->nama}}" readonly="">
          </div>
        
          <div class="form-group">
            <label class="control_label">Nama Orangtua</label>
          <input type="text" name="c" class="form-control" value="{{$murid->orangtua->nama_ibu}} dan {{$murid->orangtua->nama_ayah}}" readonly="">
          </div>

          <div class="form-group">
          <label class="control-lable">Jenis Kelamin</label>
          <input type="text" name="c" class="form-control" value="{{$murid->jk}}" readonly="">
        </div>

        <div class="form-group">
          <label class="control-lable">Umur</label>
          <input type="number" name="d" class="form-control" value="{{$murid->umur}}" readonly="">
        </div>

        <div class="form-group">
          <label class="control-lable">Alamat</label>
          <textarea class="form-control" rows="10" name="e" readonly="">{{$murid->alamat}}</textarea>
        </div>
              </form>
                  
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
