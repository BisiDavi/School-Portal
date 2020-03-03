@section('title')
	Admission
@endsection

@section('link')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admission.css')}}">
@endsection

@section('admission-text')
<div class="admission-guideline">
	<h1>FRANJI Schools Application</h1>
	<p>
		In order to get admitted to Pinefield Schools, kindly follow the steps below to complete your application
	</p>

	<h3>How to Apply</h3>
	<div class="text">
		<p>Select Which school section you want to apply for (Nursery/primary OR College)</p>
		<p>Fill the simple online form to download a copy of the application form (PDF)</p>
		<p>Print it out, Complete the application and submit back to us (via email or physically at the school)</p>
		<p>Your application will be reviewed by Pinefield admission committee to determine if you are eligible for admission</p>
		<p>Your application will be approved/rejected</p>
	</div>
</div>
@endsection

@section('school-range')
	<div class="row ">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body ">
					<h3>LOWER SCHOOL</h3>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body ">
					<h3>MID SCHOOL</h3>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="card shadow p-3 mb-5 bg-white rounded ml-5">
				<div class="card-body ">
					<h3>HIGH SCHOOL</h3>
				</div>
			</div>
		</div>
	</div>
@endsection

@extends('layout')