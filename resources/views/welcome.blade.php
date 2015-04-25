@extends('layouts.main')



@section('style')

@parent
		<style>
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 70px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
@stop
@section('content')
	<video autoplay loop poster=" {{ asset('images/final_background.jpg') }}" id="bgvid">
        <!-- <source src="longjourney.webm" type="video/webm"> -->
        <source src="{{ asset('longjourney.mp4') }}" type="video/mp4">
    </video>
		<div class="row">
			<div class="col offset-s3 s6">
				<div class="title">Housing - Qucikly Find Houses</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<br/>
				<br/>
				@if(!Auth::check())
				<a class="waves-effect waves-light btn btn-large blue lighten-1" href="{{ route('user.facebook')}}"><i class="mdi-social-person-add left" id="fbLoginButton" ></i>LOGIN WITH FACEBOOK</a>
				@endif
			</div>
		</div>
@endsection
