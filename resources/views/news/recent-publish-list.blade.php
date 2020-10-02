@extends('home-master')



@section('content')

<div class="news-post-list">
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/36.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>About Us</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Recently ublish</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t ma-b">
		<div class="container-title">
			<h3>
				<span>
					Recent Publication
				</span>
			</h3>
		</div>
		<div class="row recent-publish">
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card">
						<div class="post-card-img">
							<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center">
								<h5 class="mb-0">Traditional Building Types of Bungamati</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card">
						<div class="post-card-img">
							<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center">
								<h5 class="mb-0">IEC Materials for COVID-19</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card">
						<div class="post-card-img">
							<img src="{{url('public/images/17.png')}}" class="img-fluid" alt="">
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center">
								<h5 class="mb-0">Bunga – Abode of the Mystics</h5>
							</div>
						</div>
					</div>
				</a>
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