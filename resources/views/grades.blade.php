@section('title')
	Explore Grades
@endsection

@section('link')
<link rel="stylesheet" type="text/css" href="{{asset('css/grades.css')}}">
@endsection

@section('login')
<div class="wrapper fadeInDown">
	<br/>
	<br/>
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{asset('img/logo.png')}}" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Admission Number">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection

@extends('layout')