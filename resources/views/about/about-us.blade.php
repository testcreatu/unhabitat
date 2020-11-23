@extends('home-master')



@section('content')

<div class="about-page ">
	{{-- <div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('uploads/abouts/'.$finalAbout['detail']['background_image'])}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>{{$finalAbout['detail']['title']}}</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Overview</li>
				</ol>
			</nav>
		</div>
	</div> --}}
	<div class="container ma-t ma-b">
		<div class="header-margin">
			<div class="row">
				<!-- <div class="col-md-3 left-container">
					<div class="left-col box-shadow">
						<ul class="sidebar">
							<li class="{{ (request()->is('about_us*')) ? 'active' : '' }}">
								<a href="#">About us</a>
							</li>
							<li>
								<a href="#">Overview</a>
							</li>
							<li>
								<a href="#">Where we are</a>
							</li>
							<li>
								<a href="#">Mandate & History</a>
							</li>
							<li>
								<a href="#">Un-Habitat In nepal</a>
							</li>
							<li>
								<a href="#">expression of intrest</a>
							</li>
							<li>
								<a href="#">employment opportunities</a>
							</li>
						</ul>
					</div>
				</div> -->
				<div class="col-md-12 right-container">
					<div class="right-col">
						<div class=" detail-content">
							<div class="title">
								<h5>{{$finalAbout['detail']['title']}}</h5>
							</div>

							<div class="content">
								<p>
									@if($finalAbout['detail']['title'] == 'About Us')
									{!!$finalAbout['detail']['description']!!}
									@else
									{!!$finalAbout['detail']['description']!!}
									@endif
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection