<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="utf-8">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	@yield('video-link')
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
		  <a class="navbar-brand ml-5" href="#">
			  <img src="{{asset('img/logo.png')}}">
			  Franej Educational Centre
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=""navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="nav navbar-nav ml-auto mr-auto">
		      <li class="nav-item ml-5 mr-5 active">
		        <a class="nav-link" href="#">Explore Grades<span class="sr-only">(current)</span></a>
		      </li> 
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="#">School</a>
		      </li>
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="#">Admission</a>
		      </li>
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="#">Blog</a>
		      </li>
		      <li class="nav-item ml-3 mr-0">		        
		        <a href="#" class="btn btn-secondary btn-lg active" role="button">Schedule Now</a>
		      </li>
		    </ul>
		  </div>
		</nav>		
	</header>
	@yield('embedded-video')
	@yield('grid-image-1')
	@yield('tour')
	@yield('philosophy')
	@yield('events')
	@yield('blog')
	@yield('upcoming-events')
	@yield('community')
</body>
<footer>
	<div class="row">
		<div class="col-md-4">
		<div class="icon ml-5">			
			<i class="fa fa-map-marker-alt"></i>
			<i class="fa fa-phone"></i>
			<i class="fa fa-envelope"></i>
		</div>
		<hr class="blog-header" />

		<div class="row ml-5">				
			<div class="col-md-2">	
				<h5><a href="#blog">Blog</a></h5>
			</div>
			<div class="col-md-2">	
				<h5><a href="#Events">Events</a></h5>
			</div>
		</div>
		</div>
		<div class="col-md-2">
			<h3><a href="#">SCHOOL</a></h3>
			<ul>
				<li><a href="#">Admissions</a></li>
				<li><a href="#">About MB</a></li>
				<li><a href="#">Athletics</a></li>
				<li><a href="#">Alumni</a></li>
				<li><a href="#">Giving</a></li>
				<li><a href="#">Job</a></li>
				<li><a href="#">Head of School</a></li>
				<li><a href="#">Camps</a></li>
			</ul>
		</div>			
		<div class="col-md-2">
			<h3><a href="#">LOWER SCHOOL</a></h3>
			<ul>
				<li><a href="#">Nursery</a></li>
				<li><a href="#">Pre-Primary</a></li>
				<li><a href="#">First</a></li>
				<li><a href="#">Second</a></li>
				<li><a href="#">Third</a></li>
				<li><a href="#">Fourth</a></li>
				<li><a href="#">Fifth</a></li>
			</ul>
		</div>			
		<div class="col-md-2">
			<h3><a href="#">MIDDLE SCHOOL</a></h3>
			<ul>
				<li><a href="#">Sixth</a></li>
				<li><a href="#">Seventh</a></li>
				<li><a href="#">Eighth</a></li>
			</ul>
		</div>
		<div class="col-md-2">
			<h3><a href="#">UPPER SCHOOL</a></h3>
			<ul>
				<li><a href="#">Ninth</a></li>
				<li><a href="#">Tenth</a></li>
				<li><a href="#">Eleventh</a></li>
				<li><a href="#">Twelfth</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 copyright ml-5">
			<p>Copyright franej Education All rights reserved</p>
		</div>
		<div class="col-md-6">
			<a class="fa fa-facebook"></a>
			<a class="fa fa-twitter"></a>
			<a class="fa fa-instagram"></a>
			<a class="fa fa-youtube"></a>
		</div>
	</div>
</footer>
</html>