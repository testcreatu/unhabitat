@extends('home-master')



@section('content')

<div class="news-post-list">
	<div class="container">
		<div class="title text-center mb-4">
			<h2 class="m-0">Featured News</h2>
		</div>

		<div class="row">
			<div class="col-md-3 mb-3">
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
			</div>
			<div class="col-md-3 mb-3">
				<div class="main-post-card ">
					<div class="post-card-img">
						<a href="{{url('featured_news_detail')}}">
							<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
						</a>
					</div>
					<div class="sub-title text-center mt-2">
						<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Learning to hand wash</h5></a>
						<span class="post-date">May 12,2020</span>
					</div>
					<div class="content">
						<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG lorem</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-3">
				<div class="main-post-card ">
					<div class="post-card-img">
						<a href="{{url('featured_news_detail')}}">
							<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
						</a>
					</div>
					<div class="sub-title text-center mt-2">
						<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Disseminating Message through IEC</h5></a>
						<span class="post-date">May 12,2020</span>
					</div>
					<div class="content">
						<p>UN Habitat Nepal disseminates the message on essence of Hand Washing and major indicators of total sanitation targeting to people from GSF program.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-3">
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
			</div>
		</div>
			<!-- <div class="col-md-3">
				<div class="popular-post">
					<div class="title text-center">
						<h6 class="mb-3">Popular News</h6>
					</div>
					<div class="row popular-post-list">
						<div class="col-5 col-sm-5 col-md-5">
							<div class="popular-post-img">
								<a href="#">
									<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-7 col-sm-7 col-md-7">
							<div class="sub-title">
								<a href="#"><h6>Preparing resilient community to fight against COVID-19</h6></a>
							</div>
						</div>
					</div>
					<div class="row popular-post-list">
						<div class="col-5 col-sm-5 col-md-5">
							<div class="popular-post-img">
								<a href="#">
									<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-7 col-sm-7 col-md-7">
							<div class="sub-title">
								<a href="#"><h6>Practicing hand hygiene</h6></a>
							</div>
						</div>
					</div>
					<div class="row popular-post-list">
						<div class="col-5 col-sm-5 col-md-5">
							<div class="popular-post-img">
								<a href="#">
									<img src="{{url('public/images/6.jpeg')}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-7 col-sm-7 col-md-7">
							<div class="sub-title">
								<a href="#"><h6>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks </h6></a>
							</div>
						</div>
					</div>
				</div>
			</div> -->

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