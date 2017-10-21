<head>
	<title>Fashoniza</title>
	<link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@section('css')

    @show

    <style type="text/css">
    	h3{
    		margin:0px;
    		padding-top: 30px;
    	}
    </style>
</head>

<body>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Fashioniza</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
         <li><a href="/support">Support</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/admin">Admin</a></li>
        <li><a href="/support">Support</a></li>
      </ul>
    </div>
  </nav>
  </div>


	<div class="row">
    <form class="offset-s3 col s6" method="GET" action="">
    <h4>Cek Fashion yang cocok untuk anda</h4>

   <label>Umur</label>
  <select class="browser-default" id="umur" name="umur">
    <option value="" disabled selected>Pilih rentang umur anda</option>
    <option value="15-17">15-17</option>
    <option value="18-20">18-20</option>
    <option value="21-25">21-25</option>
  </select>

<label>Tujuan</label>
  <select class="browser-default" id="tujuan" name="tujuan">
    <option value="" disabled selected>Pilih tujuan anda</option>
    <option value="kuliah">Kuliah</option>
    <option value="casual">Casual</option>
    <option value="hangout">Hangout</option>
    <option value="formal">Formal</option>
    <option value="kantor">Kantor</option>
  </select>


  <label>Kepribadian</label>
  <select class="browser-default" id="kepribadian" name="kepribadian">
    <option value="" disabled selected>Pilih kepribadian anda</option>
    <option value="feminim">feminim</option>
    <option value="boyiz">boyish</option>
    <option value="netral">netral</option>
  </select>

  <button>Submit</button>

  <br>

  @if($data==null AND $data!="")
  	<h4 align="center">Hasilnya tidak ada yang cocok, kami menambahkan segera!</h4>
  @elseif($data!=null)
  	<h4 align="center">Hasilnya kamu cocok dengan : </h4>
  	<div class="offset-m3 col m6">
   		<img align="center" src="/image/{{$data->gambar}}" id="showgambar" style="max-width:200px;max-height:200px;" />
   	</div>
   <div class="col s12">
   <p >{{$data->deskripsi}}</p>
   </div>
   
  @endif





    </form>
  </div>

</body>


