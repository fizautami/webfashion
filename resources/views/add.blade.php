@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel pink white-text">Tambah Item</div>
</div>

<div class="section">
	<form action="{{ url('store') }}" method="POST">
  {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="judul">
            <label for="title">Judul</label>
          </div>
    </div>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="kategori">
            <label for="title">Kategori</label>
          </div>
    </div>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="umur">
            <label for="title">Umur</label>
          </div>
    </div>

     <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="kepribadian">
            <label for="title">Kepribadian</label>
          </div>
    </div>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="deskripsi">
            <label for="title">Deskripsi</label>
          </div>
    </div>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="tujuan">
            <label for="title">Kebutuhan</label>
          </div>
    </div>

    <div class="row">
          <div class="input-field col s12">
            <input type="file" class="validate" name="gambar">
            <label for="title">Gambar</label>
          </div>
    </div>
   
   <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
	</form>
</div>

@endsection