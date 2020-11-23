@extends('home-master')



@section('content')

<div class="news-detail">
	<!-- <div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<div class="banner-title">
				<h2>Featured News</h2>
			</div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Featured News</li>
				</ol>
			</nav>
		</div>
	</div> -->
	<div class="container ma-t">
		<div class="header-margin">
			<div class="row mb-4">
				<div class="col-md-8">
					<div class="news-detail-post">
						<div class="title text-center mb-4">
							<h4 class="mb-0">{{$finalNewsDetail['detail']['title']}}</h4>
							<?php $date = Carbon\Carbon::parse($finalNewsDetail['detail']['created_at'])->format('F d, Y') ?>
							<span class="post-date">{{$date}}</span>
						</div>
						<div class="news-detail-post-img">
							<img src="{{url('uploads/thumbnail/'.$finalNewsDetail['detail']['image'])}}" class="img-fluid" alt="">
						</div>
						<div class="content mt-2">
							
							<p>{!!$finalNewsDetail['detail']['description']!!}</p>
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
					<div class="sidebar sidebar-tab box-shadow mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">Recent Project</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="newsletter-tab" data-toggle="tab" href="#Newsletter" role="tab" aria-controls="Newsletter" aria-selected="false">Related Publication</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalNewsDetail['latest_projects'] as $projects)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('project_detail/'.$projects['slug'])}}">
																<img src="{{url('uploads/thumbnail/'.$projects['image'])}}" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('project_detail/'.$projects['slug'])}}"><h6>{{$projects['title']}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="Newsletter" role="tabpanel" aria-labelledby="newsletter-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalNewsDetail['publications'] as $publications)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
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
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="sidebar sidebar-tab box-shadow mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="true">Notice</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
								<div class="tab-notice">
									<div class="row">
										@foreach($finalNewsDetail['notice'] as $notice)
										<div class="link-list mt-4">
											<ul class="">
												<li><a href="{{url('notice/'.$notice['slug'])}}">{{$notice['title']}}</a></li>
											</ul>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection