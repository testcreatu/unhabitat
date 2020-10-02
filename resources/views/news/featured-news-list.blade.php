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
					<li class="breadcrumb-item active" aria-current="page">Featured News List</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t ma-b">
		<div class="container-title">
			<h3>
				<span>
					Featured News
				</span>
			</h3>
		</div>

		<div class="row">
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card ">
						<div class="post-card-img">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center mt-2">
								<h5 class="mb-0">Preparing resilient community to fight against COVID-19</h5>
							</div>
							<div class="content">
								<p>In a wake against COVID-19 havoc, communities across Nepal are suffering from shortage of hand sanitizer. All the shelf of super market and shops are.</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card ">
						<div class="post-card-img">
								<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center mt-2">
								<h5 class="mb-0">Learning to hand wash</h5>
							</div>
							<div class="content">
								<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG lorem</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 mb-3">
				<a href="{{url('featured_news_detail')}}">
					<div class="main-post-card ">
						<div class="post-card-img">
							<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
							
						</div>
						<div class="post-card-content">
							<div class="sub-title text-center mt-2">
								<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Disseminating Message through IEC</h5></a>
							</div>
							<div class="content">
								<p>UN Habitat Nepal disseminates the message on essence of Hand Washing and major indicators of total sanitation targeting to people from GSF program.</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-3 mb-3">
				<div class="main-post-card ">
					<div class="post-card-img">
						<a href="{{url('featured_news_detail')}}">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
						</a>
					</div>
					<div class="sub-title text-center mt-2">
						<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Preparing resilient community to fight against COVID-19</h5></a>
						<span class="post-date">May 12,2020</span>
					</div>
					<div class="content">
						<p>In a wake against COVID-19 havoc, communities across Nepal are suffering from shortage of hand sanitizer. All the shelf of super market and shops are.</p>
					</div>
				</div>
			</div> -->
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