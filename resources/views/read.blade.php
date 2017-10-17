@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">
		{{$data->judul}}
	</div>
</div>

<div class="section">
	<div class="row">
		<div class="col s12" >
		    @if(!$data->gambar=="")
              <div class="row">
              <div class="col s6">
              <img src="/image/{{$data->gambar}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
              </div>
              </div>
            @endif
			<div class="divider"></div>
			<p>{{$data->deskripsi}}</p>



		</div>

	
	</div>



</div>




@endsection

