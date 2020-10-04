@extends('home-master')



@section('content')

<div class="news-detail">
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>About Us</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Featurd News</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t">
		<div class="row mb-4">
			<div class="col-md-8">
				<div class="news-detail-post">
					<div class="title text-center mb-4">
						<h4 class="mb-0">Learning to hand wash</h4>
						<span class="post-date">May 12,2020</span>
					</div>
					<div class="news-detail-post-img">
						<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
					</div>
					<div class="content mt-2">
						
						<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG, Arghakhanchi.</p>
					</div>
					<div class="share-plugin mt-3">
						<ul>
							<li class="facebook">
								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="vMEw29y5"></script>
								<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
							</li>
							<!-- <li class="twitter">
								<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
							</li> -->
						</ul>
					</div>
					<hr>
					<div class="facebook-comment">
						<div id="fb-root"></div>
							<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=706653159797806&autoLogAppEvents=1" nonce="ge0FdjvM"></script>

							<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
					</div>
				</div>
				<!-- <div class="related-news">
					<div class="container-title">
						<h3>
							<span>Related News</span>
						</h3>
					</div>
					<div class="owl-carousel owl-theme home-card-carousel">
						<div class="item">
							<a href="{{url('featured_news_detail')}}">	
								<div class="related-news-card">
									<div class="related-news-img">
										<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
									</div>
									<div class="content text-center mt-3">
										<h6>Practicing hand hygiene</h6>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-md-4">
				<div class="popular-post">
					<div class="title text-center">
						<h6 class="mb-3">Most viewed</h6>
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

				<div class="popular-post mt-4">
					<div class="title text-center">
						<h6 class="mb-3">Notice</h6>
					</div>
					<div class="sidebar">
						<div class="link-list mt-4">
							<ul class="">
								<li><a href="{{url('notice')}}">Call for Proposal (CFP)</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="popular-post mt-4">
					<div class="title text-center">
						<h6 class="mb-3">Related News</h6>
					</div>
					<a href="{{url('featured_news_detail')}}">
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
					</a>
					<a href="{{url('featured_news_detail')}}">
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
					</a>
				</div>

				
				<!-- <div class="gif-post">
					<div class="gif-post-img">
						<a href="https://sustainabledevelopment.un.org/">
							<img src="{{url('public/images/9.gif')}}" class="img-fluid" alt="">
						</a>
					</div>
					<div class="gif-post-img">
						<a href="#">
							<img src="{{url('public/images/10.gif')}}" class="img-fluid" alt="">
						</a>
					</div>
					<div class="gif-post-img">
						<a href="#">
							<img src="{{url('public/images/11.gif')}}" class="img-fluid" alt="">
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>

@endsection