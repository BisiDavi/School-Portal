@extends('layout')

@section('title')
	School Portal
@endsection

@section('video-link')
	<link rel="stylesheet" type="text/css" href="{{asset('css/video.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection


@section('embedded-video')
<div class="v-header container-fluid mb-2">
	<div class="fullscreen-video-wrap">
		<video src="{{asset('video/vid-2.mp4')}}" autoplay="true" loop="true" controls="true"></video>
	</div>
	<div class="header-overlay"></div>
	<div class="header-content">
		<h1>Inspiration Integrity</h1>
		<p>
			Installing an atmosphere of self-descovery,
			resourcefulness and compassion.
		</p>
	</div>
</div>
@endsection


@section('grid-image-1')
	<div class="container-fluid my-auto mb-5">
		<div class="row padding">
		<div class="mid-section col-md-4">
		<img src="{{asset('img/img-3.png')}}" alt="image 3" />
			<div class="content">
				<p>GRADE NURSERY 1 - 5</p>
				<h2>Lower School</h2>
			</div>			
		</div>
		<div class="mid-section col-md-4">
		<img src="{{asset('img/img-2.png')}}" alt="image 2" />
			<div class="content">
				<p>GRADE 6 - 8</p>
				<h2>Mid School </h2>
			</div>			
		</div>
		<div class="mid-section col-md-4">
		<img src="{{asset('img/img-1.png')}}" alt="image 1" />
			<div class="content">
				<p>GRADE 9 - 12</p>
				<h2>High School </h2>	
			</div>			
		</div>
		</div>
	</div>
@endsection

@section('tour')
	<div class="container mb-5 mt-5">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('img/school-img.png')}}" alt="school building" >
			</div>
			<div class="col-md-6 tour mt-5">
				<h4 class="mt-4 mb-4  tour-heading">INQUIRE IN PERSON</h4>
				<h4 class="tour-content">Rooted In The Past, Preparing Students For The Future</h4>
				<h6>Schedule a tour now</h6>
					<!--
					 meant to make a form
					-->
				</div>			
		</div>
	</div>
@endsection

@section('philosophy')
<div class="row">
	<div class=" col-4 card shadow p-3 mb-5 bg-white rounded letter mt-5 mb-2">
		<div class="card-body">
			<h4>LETTER FROM HEAD OF SCHOOL</h4>
			<h6>Dr. mrs E.C. UZU</h6>
			<p>
				History was made as the state and the nation heralded 
				the birth of a golden child. A child that is destined to
				 change the fortune and lives of the people of Benin 
				and the Nation at large. A child that soon 
				metamorphosed into an adult, to take its 
			</p>
			<br />
			<h6 class="readmore"><a href="#">Read More</a></h6>
		</div>
	</div>
	<div class="col-8 mt-2 philosophy">
		<img src="{{ asset('img/philosophy.png')}}" alt="philosophy" >
		<div class="p-content">
			<p>Our Educational Philosophy</p>
		</div>
	</div>
</div>
@endsection

@section('events')
	<div class="events mt-2 mb-5">
		<div class="event-text mb-5">
			<h3>Happening at Franej</h3>
			<hr />
			<!--<small>instagram : <a href="#">@franejeducationcenter</a></small> -->
		</div>		
		<div class="row">
			<div class="event col-3">
				<img src="{{ asset('img/f-img-1.png')}}">
			</div>
			<div class="event col-3">
				<img src="{{ asset('img/f-img-2.png')}}">
			</div>
			<div class="event col-3">
				<img src="{{ asset('img/f-img-3.png')}}">
			</div>
			<div class="event col-3">
				<img src="{{ asset('img/f-img-4.png')}}">
			</div>
		</div>
	</div>
@endsection

@section('blog')
	<div class="row school-blog mt-2 mb-2 ml-0 mr-0">
		<div class="col-6">
			<img src="{{ asset('img/chess.png')}}">
		</div>
		<div class="blog col-6 mt-5">
			<h3>Franej Blog</h3>
			<hr class="blog-header" />
			<div class="mb-3 date">{{ now()-> format('M d, Y')}} </div>
			<h3>Inter class game competition</h3>
			<p>
			History was made as the state and the nation heralded 
			the birth of a golden child. A child that is destined to
			change the fortune and lives of the people of Benin 
			and the Nation at large. A child that soon 
			metamorphosed into an adult, to take its 
			</p>
			<br />
			<h6 class="readmore"><a href="#">Read More</a></h6>
		</div>
	</div>
	
	<div class="row mt-5 mb-5 ml-5 mr-5">
		<div class="col-md-4 ">	
			<div class="mb-3 date">{{ now()-> format('M d, Y')}} </div>
			<h3>"I Am Not Your Negro" - to be Presented by Moses Brown</h3>		
			<p>
			{{$mocktext = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'}}
			</p>
			<h6 class="readmore"><a href="#">Read More</a></h6>
		</div>
		<div class="col-md-4">
			<div class="mb-3 date">{{ now()-> format('M d, Y')}} </div>
			<h3>Moses Brown - SquashBuster Projects Breaks Ground</h3>
			<p>	{{ $mocktext }}	</p>
			<h6 class="readmore"><a href="#">Read More</a></h6>
		</div>
		<div class="col-md-4">
			<div class="mb-3 date">{{ now()-> format('M d, Y')}} </div>
			<h3>E. Oluchi named Gatorade Player of the Year</h3>
			<p>	{{ $mocktext }}	</p>
			<h6 class="readmore"><a href="#">Read More</a></h6>
		</div>		
	</div>
@endsection

@section('upcoming-events')
	<div class="upcoming-events ml-2 mb-5">
		<div class="row coming-events mb-5">
			<h3 class="col-3 p-0 ml-5">Upcoming Events</h3>			
			<h6 class="col-2 readmore"><a href="#">SEE ALL</a></h6>
			<hr class="blog-header" />
		</div>
	</div>
		<div class="row event-blog ml-5">
			<div class="col-md-3 card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body">
					<h4>Baltimore Alumni Dinner</h4>
					<div class="row event-view">
						<div class="col-md-6 date">{{ now()-> format('M d, Y')}} </div>
						<div class="col-md-6 more"><a href="#">LEARN MORE </a></div>
					</div>
				</div>
			</div>
		
			<div class="col-md-3 card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body">
					<h4>Austin Alumni Dinner</h4>
					<div class="row event-view">
						<div class="col-md-6 date">{{ now()-> format('M d, Y')}} </div>
						<div class="col-md-6 more"><a href="#">LEARN MORE </a></div>
					</div>
				</div>
			</div>

			<div class="col-md-3 card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body">
					<h4>Moses Brown Summer Camps Open House</h4>
					<div class="row event-view">
						<div class="col-md-6 date">{{ now()-> format('M d, Y')}} </div>
						<div class="col-md-6 more"><a href="#">LEARN MORE </a></div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('community')
	<div class="community mb-5 mt-5">
		<img src="{{ asset('img/community.png')}}">
		<div class="img-text">
		<p>Join the Community</p>
		<button type="button" class="btn btn-outline-light inquire">Inquire</button>
		</div>		
	</div>
@endsection
