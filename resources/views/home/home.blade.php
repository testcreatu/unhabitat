@extends('home-master')



@section('content')
@if(Session::has('SubscriptionSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Subscription Added Successfully</strong> {{ Session::get('message', '') }}
</div>
@endif
<div class="home-page">
	<div id="bannerCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner bannercarousel-item overlay-bg">
			@foreach($finalHome['carousel'] as $key => $carousel)
			<div class="carousel-item <?php echo $key == 0 ?'active':'' ?>">
				<div class="carousel-img">
					<img class="d-block w-100" src="{{url('uploads/carousel/'.$carousel['image'])}}" alt="First slide">
				</div>
				<div class="banner-feature">
					<h1>{{$carousel['title']}}</h1>
				</div>
			</div>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- <div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<a href="{{url('covid-19_response')}}"><h1>Unhabitat Covid-19 Response By Nepal</h1></a>
		</div>
	</div> -->

	<!-- trending now -->
	<div class="container ma-t ma-b">
		<div class="container-title">
			<h3>
				<span>Trending Now</span>
			</h3>
		</div>
		<div class="owl-carousel owl-theme home-card-carousel">
			@foreach($finalHome['projects'] as $key => $projects)
			<div class="item">
				<a href="{{url('project_detail/'.$projects['slug'])}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('uploads/thumbnail/'.$projects['image'])}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>{{$projects['title']}}</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			@endforeach

		</div>
	</div>

	<!-- featured post -->
	<div class="featured-post pa-tb">
		<div class="container">
			<div class="container-title">
				<h3>
					<span>Featured News</span>
				</h3>
			</div>
			<div class="row mt-3">
				<div class="col-md-8 mb-3">
					<a href="{{url('featured_news_detail/'.$finalHome['blog'][0]['slug'])}}">
						<div class="main-post-card ">
							<div class="post-card-img full-post-card-img">
								<img src="{{url('uploads/thumbnail/'.$finalHome['blog'][0]['image'])}}" class="img-fluid" alt="{{$finalHome['blog'][0]['altimage']}}">
							</div>
							<div class="post-card-content">
								<div class="sub-title text-center mt-2">
									<h5 class="mb-0">{{$finalHome['blog'][0]['title']}}</h5>
								</div>
								<div class="content">
									<p>{{substr($finalHome['blog'][0]['summary'],0,200)}}</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<div class="row">
						@foreach($finalHome['blog'] as $key=>$blog)
						@if($key != 0)
						<div class="col-md-12 mb-3">
							<a href="{{url('featured_news_detail/'.$blog['slug'])}}">
								<div class="main-post-card ">
									<div class="post-card-img post-card-half-img">
										<img src="{{url('uploads/thumbnail/'.$blog['image'])}}" class="img-fluid" alt="{{$blog['altimage']}}">
									</div>
									<div class="post-card-content half-post-card-content">
										<div class="sub-title text-center mt-2">
											<h5 class="mb-0">{{$blog['title']}}</h5>
										</div>
										<div class="content">
											<p>{{substr($blog['summary'],0,100)}}</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						@endif
						@endforeach
						
					</div>
				</div>
			</div>
			<div class="view-more text-center mt-4">
				<a href="{{url('featured_news')}}" class="btn btn2">View More &nbsp;&nbsp; +</a>
			</div>
		</div>
	</div>

	<!-- recent publish -->
	<div class="container ma-t">
		<div class="recent-publish">
			<div class="container-title">
				<h3>
					<span>
						Recent Publication
					</span>
				</h3>
			</div>
			<div class="row">
				@foreach($finalHome['publications'] as $publications)
				<div class="col-md-3">
					<a href="{{url('recent_publish_detail/'.$publications['slug'])}}">
						<div class="main-post-card">
							<div class="post-card-img">
								<img src="{{url('uploads/publications/'.$publications['image'])}}" class="img-fluid" alt="{{$publications['altimage']}}">
							</div>
							<div class="post-card-content">
								<div class="sub-title text-center">
									<h5 class="mb-0">{{$publications['title']}}</h5>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach

			</div>
			<div class="view-more text-center mt-5">
				<a href="{{url('recent_publish')}}" class="btn btn2">View More &nbsp;&nbsp; +</a>
			</div>
		</div>
	</div>

	<!-- foucs quote -->
	<div class="container-fluid unhabitat-focus ma-t">
		<div class="container">
			<div class="title">
				<h4>{{$finalHome['features_desc']['title']}}</h4>
			</div>
			<div class="content">
				<p>{{$finalHome['features_desc']['summary']}}</p>
			</div>
			<div class="row mt-5">
				@foreach($finalHome['features'] as $key => $features)
				<div class="col-md-3 static-card">
					<div class="focus-card">
						<div class="focus-img">
							<img src="{{url('uploads/thumbnail/'.$features['image'])}}" class="img-fluid" alt="">
						</div>
						<div class="content">
							<p>{{$features['summary']}}</p>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>

	
	<div class="container pa-tb">
		<div class="row no-gutters">
			<div class="col-md-12 left-container">
				<div class="gif-post">
					<div class="container-title">
						<h3>
							<span>
								Sustainable Development Goals
							</span>
						</h3>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="thumbs"> 
								@foreach($finalHome['goals'] as $goals)
								<img src="{{url('uploads/thumbnail/'.$goals['image'])}}" rel="{{url('uploads/thumbnail/'.$goals['image'])}}" data-text="{{$goals['summary']}}" class="zoom" />
								@endforeach
							</div>
						</div>
						<div class="col-md-4">
							<div class="img-preview">
								<div class="preview">
									<img src="http://placehold.it/400x220">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- recent video -->
	<div class="recent-video pa-tb">
		<div class="container">
			<div class="container-title">
				<h3>
					<span>
						Recent Video
					</span>
				</h3>
			</div>
			<div class="owl-carousel owl-theme home-card-carousel">
				@foreach($finalHome['video-gallery'] as $key=>$videoGallery)
				<div class="item">
					<a href="{{$videoGallery['embeded_url']}}" target="_blank">
						<div class="video-card">
							<div class="video-card-img">
								<img src="https://img.youtube.com/vi/{{$videoGallery['video_id']}}/sddefault.jpg">
							</div>
							<div class="video-card-title">
								<h6>{{$videoGallery['title']}}</h6>
							</div>
						</div>
					</a>
				</div>
				@endforeach

			</div>
			<div class="view-more text-center mt-4">
				<a href="{{url('our_video')}}" class="btn btn2">View More &nbsp;&nbsp; +</a>
			</div>
		</div>
	</div>


	
	<!-- our work -->
	<div class="container-fluid our-work box-shadow ">
		<div class="container">
			<div class="title">
				<h4>{{$finalHome['milestones_desc']['title']}}</h4>
			</div>
			<div class="content">
				<p>{{$finalHome['milestones_desc']['summary']}}</p>
			</div>
			<div class="row mt-4">
				@foreach($finalHome['milestones'] as $milestones)
				<div class="col-md-4 static-card">
					<div class="our-work-card">
						<p><strong>{{$milestones['number']}}</strong></p>
						<p>{{$milestones['summary']}}</p>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
</div>

@endsection