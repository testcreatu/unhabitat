@extends('home-master')



@section('content')

<div class="notice project ma-t ma-b">
	<div class="container">
		<div class="row">
			<div class="col-md-8 left-conatiner">
				<div class="left-col">
					<div class="news-detail-post mb-5">
						<div class="news-detail-post-img">
							<img src="{{url('uploads/thumbnail/'.$finalProject['detail']['image'])}}" class="img-fluid" alt="">
						</div>
						<div class="share-plugin mt-3">
							<ul>
								<li class="facebook">
									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="Ra50b1s9"></script>
									<div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.google.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
								</li>
								<!-- <li class="twitter">
									<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
								</li> -->
							</ul>
						</div>
						<div class="content mt-2">
							{!!$finalProject['detail']['description']!!}
						</div>
					</div>
					<hr>
					<div class="facebook-comment">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=706653159797806&autoLogAppEvents=1" nonce="ge0FdjvM"></script>

						<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="popular-post">
					<div class="title text-center">
						<h6 class="mb-3">Latest News</h6>
					</div>
					@foreach($finalProject['latest_news'] as $latest)
					<div class="row popular-post-list">
						<div class="col-5 col-sm-5 col-md-5">
							<div class="popular-post-img">
								<a href="{{url('featured_news_detail/'.$latest['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$latest['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-7 col-sm-7 col-md-7">
							<div class="sub-title">
								<a href="{{url('featured_news_detail/'.$latest['slug'])}}"><h6>{{$latest['title']}}</h6></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<div class="popular-post mt-4">
					<div class="title text-center">
						<h6 class="mb-3">Notice</h6>
					</div>
					<div class="sidebar">
						@foreach($finalProject['notice'] as $notice)
						<div class="link-list mt-4">
							<ul class="">
								<li><a href="{{url('notice/'.$notice['slug'])}}">{{$notice['title']}}</a></li>
							</ul>
						</div>
						@endforeach
					</div>
				</div>

				<div class="popular-post mt-4">
					<div class="title text-center">
						<h6 class="mb-3">Other Publications</h6>
					</div>
					@foreach($finalProject['publications'] as $publications)
					<a href="{{url('recent_publish_detail/'.$publications['slug'])}}">
						<div class="row popular-post-list">
							<div class="col-5 col-sm-5 col-md-5">
								<div class="popular-post-img">
									<a href="{{url('recent_publish_detail/'.$publications['slug'])}}">
										<img src="{{url('uploads/thumbnail/'.$publications['image'])}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-7 col-md-7">
								<div class="sub-title">
									<a href="{{url('recent_publish_detail/'.$publications['slug'])}}"><h6>{{$publications['title']}}</h6></a>
								</div>
							</div>
						</div>
					</a>
					@endforeach
					{{-- <a href="{{url('featured_news_detail')}}">
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
									<a href="#"><h6>Grant Project in Nepal mobilises Bungamati Community </h6></a>
								</div>
							</div>
						</div>
					</a> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="container">
		<div class="project-publish ">
			<div class="row ">
				<div class="col-md-6">
					<div class="title text-center">
						<h5>Related Publication</h5>
					</div>
					<div class="owl-carousel publication-carousel owl-theme mt-4">
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/23.jpg')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>Annual Report 2018 (Global Sanitation Fund Programme)</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/24.jpg')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>GSF Nepal Annual Report 2017</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/25.jpg')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>Sustainability of Open Defecation Free Campaign in GSF supported Programme Districts, Nepal</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="title text-center">
						<h5>Flagship Publication</h5>
					</div>
					<div class="owl-carousel publication-carousel owl-theme mt-4">
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/26.png')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>Global Sanitation Fund Progress Report 2015</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/27.png')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>Global Sanitation Fund – 2015 Mid-Year Update</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('recent_publish_detail')}}" class="carousel-card">
								<div class="carousel-news">
									<div class="carousel-news-img overlay-bg">
										<img src="{{url('public/images/28.jpg')}}" class="img-fluid overlay-bg" alt="">
									</div>
									<div class="caroursel-news-title text-center">
										<div class="title">
											<h4>GSF Progress Report – 2014 Update</h4>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>



@endsection