@extends('home-master')



@section('content')

<div class="gallery-list">
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/36.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>Media Center</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t ma-b">
		<div class="row ">
			<div class="col-md-3 gallery">
				<div class="image-list">
					<a href="{{url('public/images/2.jpg')}}" data-lightbox="mygallery" data-title="Practicing hand hygience">
						<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery">
				<div class="image-list">
					<a href="{{url('public/images/3.jpg')}}" data-lightbox="mygallery" data-title="">
						<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery">
				<div class="image-list">
					<a href="{{url('public/images/4.png')}}" data-lightbox="mygallery" data-title="">
						<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery">
				<div class="image-list">
					<a href="{{url('public/images/5.jpg')}}" data-lightbox="mygallery" data-title="">
						<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 gallery">
				<div class="image-list">
					<a href="{{url('public/images/6.jpeg')}}" data-lightbox="mygallery" data-title="">
						<img src="{{url('public/images/6.jpeg')}}" class="img-fluid" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection