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
	
			</div>
		</div>
	</div>
</div>

@endsection