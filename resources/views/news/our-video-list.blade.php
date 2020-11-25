@extends('home-master')



@section('content')

<div class="header-margin">
	<div class="news-post-list">
		<div class="container ma-t ma-b">
			<div class="container-title">
				<h3>
					<span>
						Our Video
					</span>
				</h3>
			</div>

			<div class="row recent-publish video-list">
				@foreach($videoGallery as $video)
				<div class="col-md-4 mb-3">
					<div class="video-card">
						<div class="video-card-img">
							<a href="{{$video['embeded_url']}}" target="_blank">
								<img src="https://img.youtube.com/vi/{{$video['video_id']}}/sddefault.jpg">
							</a>
						</div>
						<div class="video-card-title">
							<h6>{{$video['title']}}</h6>
						</div>
					</div>
				</div>
				@endforeach
			{{-- 	<div class="col-md-4 mb-3">
					<div class="video-card">
						<div class="video-card-img">
							<a href="https://www.youtube.com/embed/DgKon3LY5mk" target="_blank">
								<img src="https://img.youtube.com/vi/DgKon3LY5mk/sddefault.jpg">
							</a>
						</div>
						<div class="video-card-title">
							<h6>Carving Heritage of Bungamati</h6>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="video-card">
						<div class="video-card-img">
							<a href="https://www.youtube.com/embed/dFsK-G5NSNU" target="_blank">
								<img src="https://img.youtube.com/vi/dFsK-G5NSNU/sddefault.jpg">
							</a>
						</div>
						<div class="video-card-title">
							<h6>COVID PROOFING: Reinventing Tranquility in Community</h6>
						</div>
					</div>
				</div> --}}
			</div>

			<nav aria-label="Page navigation">
				{{$videoGallery->links()}}
				{{-- <ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul> --}}
			</nav>
		</div>
	</div>
</div>


@endsection