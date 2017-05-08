<!DOCTYPE html>
<html>
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
</head>
<body>

<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Fashioniza</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/admin">Admin</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/admin">Admin</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
  </div>

  <div class="parallax-container valign-wrapper" style="height: 100vh">
      <div class="parallax"><img src="assets/wallpaper4.jpg"></div>
      <div class="container center">
     
      		<h1 class="black-text">Welcome to Fashioniza</h1>
      		<h4 class="black-text">Be a smart fashionable</h3>
      </div>
    </div>


    

<div class="center">
    <h2>Accessoris</h2>
    <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="assets/walpaper4.jpg" style="background-size: cover; height: 200px; width: 100%;">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="assets/wallpaper3.jpg" style="background-size: cover; height: 200px; width: 100%;">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="assets/wallpaper3.jpg" style="background-size: cover; height: 200px; width: 100%;">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>


      </div>
            

    </div>




    <div class="parallax-container">
      <div class="parallax"><img src="assets/wallpaper5.png"></div>
    </div>
<div class="center">
      <h2>Fashion Trend 2017</h2>
 <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/slider/c1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="assets/slider/c2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/slider/c3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="assets/slider/c4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="assets/slider/c5.jpg"></a>
  </div>
  </div>

  <div class="center blue lighten-4">
    <h2>Video</h2>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/d1fWA1O9Tsw" frameborder="0" allowfullscreen></iframe>
  </div>
      

       <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        
          


<script type="text/javascript">
		$( document ).ready(function(){
	    $(".button-collapse").sideNav();
	     $('.parallax').parallax();
	           $('.carousel').carousel();

});

</script>


</body>
</html>