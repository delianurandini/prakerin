@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Murid</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Murid
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('murid.update',$murid->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$murid->nama}}" required="">
				</div>
				
				<div class="form-group">
                  <label class="control_label">Nama Orangtua</label>
                  <select class="form-control" name="b">
                  @foreach($ortu as $data)
                  <option value="{{$data->id}}">{{$data->nama_ibu}} dan {{$data->nama_ayah}}</option>
                  @endforeach
                  </select>
                 </div>

                 <div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<br>
					<input type="radio" name="c" value="laki-laki">Laki-Laki
					<input type="radio" name="c" value="perempuan">Perempuan</br>
				</div>


				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="number" name="d" class="form-control" value="{{$murid->umur}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" required="">{{$murid->alamat}}</textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection