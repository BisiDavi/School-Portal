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
	@yield('link')
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
		  <a class="navbar-brand ml-5" href="/">
			  <img src="{{asset('img/logo.png')}}">
			  Franej Educational Centre
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="nav navbar-nav ml-auto mr-auto">
		      <li class="nav-item ml-5 mr-5 active">
		        <a class="nav-link" href="/grades">Explore Grades<span class="sr-only">(current)</span></a>
		      </li> 
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="/gallery">Gallery</a>
		      </li>
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="/admission">Admission</a>
		      </li>
		      <li class="nav-item ml-3 mr-5">
		        <a class="nav-link" href="#blog">Blog</a>
		      </li>
		      <li class="nav-item ml-3 schedule mr-0">		        
		        <a href="/schedule-now" class="btn btn-success btn-lg active" role="button">Schedule Now</a>
		      </li>
		    </ul>
		  </div>
		</nav>		
	</header>
	@yield('admission-text')
	@yield('embedded-video')
	@yield('grid-image-1')
	@yield('tour')
	@yield('philosophy')
	@yield('events')
	@yield('blog')
	@yield('upcoming-events')
	@yield('community')
	@yield('school-range')
	@yield('login')
</body>
<footer>
	<div class="row">
		<div class="col-md-4">
		<div class="icon row ml-5">
			<div class="col-2 mt-3 mb-3">
				<a href="#"><img src="{{asset('img/placeholder.svg')}}"></a>
			</div>
			<div class="col-2 mt-3 mb-3">
				<a href="#"><img src="{{asset('img/telephone.svg')}}"></a>
			</div>
			<div class="col-2 mt-3 mb-3">
				<a href="#"><img src="{{asset('img/mail.svg')}}"></a>			
			</div>						
		</div>
		<hr class="blog-header ml-5" />

		<div class="row blog-events ml-5">				
			<div class="col-md-2 col-sm-2">	
				<h5><a href="#blog">Blog</a></h5>
			</div>
			<div class="col-md-2 col-sm-2">	
				<h5><a href="#Events">Events</a></h5>
			</div>
		</div>
		</div>
        
		<div class="col-md-2 col-sm-3 col-xs-6">
			<h3 class="ml-5"><a href="#">SCHOOL</a></h3>
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
		<div class="col-md-2 col-sm-3 col-xs-6">
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
       
		<div class="col-md-2 col-sm-3 col-xs-6">
			<h3><a href="#">MIDDLE SCHOOL</a></h3>
			<ul>
				<li><a href="#">Sixth</a></li>
				<li><a href="#">Seventh</a></li>
				<li><a href="#">Eighth</a></li>
			</ul>
		</div>
		<div class="col-md-2 col-sm-3 col-xs-6">
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
		<div class="col-md-4 col-sm-8 col-xs-12 copyright">
			<p>Copyright Franej Education All rights reserved</p>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12 ml-5 left">
		    <div class="row mb-5 mt-2">
			    <div class="col-2">
			    <a href="#"><img src="{{asset('img/SVG/Circle Color/Facebook.svg')}}"></a>
			    </div>
			    <div class="col-2">
			    <a href="#"><img src="{{asset('img/SVG/Circle Color/Twitter.svg')}}"></a>	
			    </div>
			    <div class="col-2">
			    <a href="#"><img src="{{asset('img/SVG/Circle Color/Instagram.svg')}}"></a>
			    </div>
			    <div class="col-2">
			    <a href="#"><img src="{{asset('img/SVG/Circle Color/Youtube.svg')}}"></a>
			    </div>
		    </div>
		</div>
	</div>
</footer>
</html>
