<!DOCTYPE html>
<html>
<head>
	<title>Web Fashion</title>

	<link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @section('css')

    @show      

</head>
<body>
@section('header')
	@include('layouts.header')
@show

<div class="container">
	@yield('content')
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('materialize/js/materialize.min.js')}}"></script>
<script type="text/javascript">
	(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
</body>
</html>