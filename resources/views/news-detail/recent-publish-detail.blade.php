@extends('home-master')



@section('content')
	
<div class="publish">	
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>Publications</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Featurd News</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container ma-t ma-b">
		<div class="row">
			<div class="col-md-8">
				<div class="publish-detail ">
					<div class="publish-detail-img">
						<img src="{{url('uploads/thumbnail/'.$finalPublication['detail']['image'])}}" class="img-fluid" alt="">
					</div>
					<div class="title mt-3">
						<h4>{{$finalPublication['detail']['title']}}</h4>
					</div>
					<div class="row meta-content mt-3">	
						<div class="col-4 col-sm-4 col-md-4 publisher">
							<strong>Publisher:</strong>
							<span>{{$finalPublication['detail']['publisher_name']}}</span>
						</div>
						<div class="col-3 col-sm-3 col-md-3 publisher">
							<strong>Year:</strong>
							<span>{{$finalPublication['detail']['year']}}</span>
						</div>
						<div class="col-3 col-sm-3 col-md-3 publisher">
							<strong>Pages</strong>
							<span>{{$finalPublication['detail']['pages']}}</span>
						</div>
						<div class="col-2 col-sm-2 col-md-2 publisher">
							<strong>Download</strong>
							<span class="text-center"><a href="{{url('uploads/publications/files/'.$finalPublication['detail']['file'])}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
						</div>
					</div>	
					<div class="content mt-3">
						<p>
							{!!$finalPublication['detail']['description']!!}
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
				</div>

				<hr>

				<div class="facebook-comment">
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=706653159797806&autoLogAppEvents=1" nonce="ge0FdjvM"></script>

					<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="link-list">
					<div class="sub-title">
						<h6>Publication</h6>
					</div>
					<ul class="">
						@foreach($finalPublication['projects'] as $projects)
						<li><a href="{{url('project_detail/'.$projects['slug'])}}">{{$projects['title']}}</a></li>
						@endforeach
						{{-- <li><a href="{{url('recent_publish_detail')}}">Bunga – Abode of the Mystics </a></li>
						<li><a href="{{url('recent_publish_detail')}}">Parya Sampada</a></li> --}}
					</ul>
				</div>
					<div class="popular-post mt-4">
					<div class="title text-center">
						<h6 class="mb-3">Notice</h6>
					</div>
					<div class="sidebar">
						@foreach($finalPublication['notice'] as $notice)
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
						<h6 class="mb-3">Other News</h6>
					</div>
					@foreach($finalPublication['latest_news'] as $news)
					<a href="{{url('featured_news_detail/'.$news['slug'])}}">
						<div class="row popular-post-list">
							<div class="col-5 col-sm-5 col-md-5">
								<div class="popular-post-img">
									<a href="{{url('featured_news_detail/'.$news['slug'])}}">
										<img src="{{url('uploads/thumbnail/'.$news['image'])}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-7 col-md-7">
								<div class="sub-title">
									<a href="{{url('featured_news_detail/'.$news['slug'])}}"><h6>{{$news['title']}}</h6></a>
								</div>
							</div>
						</div>
					</a>
					@endforeach
			</div>
		</div>
	</div>
</div>


@endsection