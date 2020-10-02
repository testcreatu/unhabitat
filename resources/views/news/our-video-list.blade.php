@extends('home-master')



@section('content')

<div class="news-post-list">
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
					<li class="breadcrumb-item active" aria-current="page">Our Video</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t ma-b">
		<div class="title text-center mb-4">
			<h2 class="m-0">Our Video</h2>
		</div>

		<div class="row recent-publish video-list">
			<div class="col-md-4 mb-3">
				<div class="video-card">
					<div class="video-card-img">
						<a href="https://www.youtube.com/embed/NaUSfPDrxqs" target="_blank">
							<img src="https://img.youtube.com/vi/NaUSfPDrxqs/sddefault.jpg">
						</a>
					</div>
					<div class="video-card-title">
						<h6>Nepal Lifetime Experiences Rice Planting Festival</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
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
			</div>
		</div>

		<nav aria-label="Page navigation">
			<ul class="pagination">
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
			</ul>
		</nav>
	</div>
</div>



@endsection