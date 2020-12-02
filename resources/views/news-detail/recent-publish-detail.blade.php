@extends('home-master')



@section('content')

<div class="publish">	
	<div class="container ma-t ma-b">
		<div class="header-margin">
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
								@if($finalPublication['detail']['publication_type'] == 'file')
								<span class="text-center"><a href="{{url('uploads/publications/files/'.$finalPublication['detail']['file'])}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
								@else
								<span class="text-center"><a href="{{$finalPublication['detail']['file']}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
								@endif
							</div>
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
						<div class="content mt-3">
							<p>
								{!!$finalPublication['detail']['description']!!}
							</p>
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
					<div class="sidebar sidebar-tab mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">Publication</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="newsletter-tab" data-toggle="tab" href="#Newsletter" role="tab" aria-controls="Newsletter" aria-selected="false">Other News</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
								<div class="tab-news">
									<div class="row">
										<div class="col-md-12">
											@foreach($finalPublication['projects'] as $projects)
											<div class="link-list">
												<ul class="">
													<li><a href="{{url('project_detail/'.$projects['slug'])}}">{{$projects['title']}}</a></li>
												</ul>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="Newsletter" role="tabpanel" aria-labelledby="newsletter-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalPublication['latest_news'] as $news)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
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
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="sidebar sidebar-tab mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="true">Notice</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
								<div class="tab-notice tab-news">
									<div class="row">
										<div class="col-md-12">
											@foreach($finalPublication['notice'] as $notice)
											<div class="link-list">
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
</div>


@endsection