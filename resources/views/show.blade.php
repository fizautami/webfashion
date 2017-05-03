@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">
		Daftar Fashion
	</div>
</div>

<div class="section">
	@foreach($datas as $data)

	<div class="row">
		<div class="col s12" >
		    @if(!$data->gambar=="")
              <div class="row">
              <div class="col s6">
              <img src="/image/{{$data->gambar}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
              </div>
              </div>
            @endif
			<h5>{{$data->judul}}</h5>
			<div class="divider"></div>
			<p>{{$data->deskripsi}}</p>


			<a href="{{ url('read', $data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">
  			Readmore
  <i class="material-icons right">send</i></a>

  <a href="{{ url('delete', $data->id) }}" class="btn btn-flat red darken-2 waves-effect waves-light white-text"
  onclick="return confirm('Anda yakin ingin dihapus ?')">
  			Delete
  <i class="material-icons right">delete</i></a>

<a href="{{ url('edit', $data->id) }}" class="btn btn-flat blue lighten-1 waves-effect waves-light white-text"
 
>
  			Edit
  <i class="material-icons right">mode_edit</i></a>


		</div>

	
	</div>


@endforeach

</div>

{{ $datas->render() }}

<div class="fixed-action-btn horizontal" style="bottom: 45 px; right: 24px;">
	<a href="{{ url('add') }}"class="btn-floating btn-large blue">

		<i class="large material-icons">add</i>
	</a>
</div>



@endsection

