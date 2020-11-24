@extends('home-master')



@section('content')

<div class="header-margin">
	<div class="gallery-list">
		<div class="container ma-t ma-b">
			<div class="row ">
				@foreach($photoGallery as $photo)
				<div class="col-md-3 gallery">
					<div class="image-list">
						<a href="{{url('uploads/photo-gallery/'.$photo['image'])}}" data-lightbox="mygallery" data-title="Practicing hand hygience">
							<img src="{{url('uploads/thumbnail/'.$photo['image'])}}" class="img-fluid" alt="">
						</a>
					</div>
				</div>
				@endforeach
	{{-- 			<div class="col-md-3 gallery">
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
				</div> --}}
			</div>
		</div>
	</div>
</div>

@endsection