

@extends('home-master')



@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Project Content Detail</a></li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="publish-detail box-shadow">
					<div class="publish-detail-img">
						<img src="{{url('public/images/32.jpg')}}" class="img-fluid" alt="">
					</div>
					<div class="title mt-3">
						<h4>Traditional Building Types of Bungamati</h4>
					</div>
					<div class="row meta-content mt-3">	
						<div class="col-md-6 publisher">
							<strong>Publisher:</strong>
							<span>UN-HABITAT</span>
						</div>
						<div class="col-md-6 publisher text-center">
							<strong>Download</strong>
							<span class="text-center"><a href="{{url('public/images/1.jpg')}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
						</div>
					</div>	
					<div class="content mt-3">
						<p>
							<strong>About</strong>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="share-plugin mt-3">
						<ul>
							<li class="facebook">
								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="vMEw29y5"></script>
								<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
							</li>
						</ul>
					</div>
				</div>
				</div>
				<div class="col-md-4 right-container">
					<div class="sidebar sidebar-tab box-shadow">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="newsletter-tab" data-toggle="tab" href="#Newsletter" role="tab" aria-controls="Newsletter" aria-selected="false">Newsletter</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
								<div class="tab-news">
									<div class="row">
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}">
																<img src="http://localhost/creatu/old-unhabitat/public/images/5.jpg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}"><h6>Preparing resilient community to fight against COVID-19</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="#">
																<img src="http://localhost/creatu/old-unhabitat/public/images/2.jpg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="#"><h6>Practicing hand hygiene</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="#">
																<img src="http://localhost/creatu/old-unhabitat/public/images/6.jpeg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="#"><h6>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="view-more text-center pb-3">
										<a href="#" class="btn btn3">View More &nbsp;&nbsp; +</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="Newsletter" role="tabpanel" aria-labelledby="newsletter-tab">
								<div class="tab-news">
									<div class="row">
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('newsletter_list_detail')}}">
																<img src="http://localhost/creatu/old-unhabitat/public/images/32.jpg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('newsletter_list_detail')}}"><h6>Preparing resilient community to fight against COVID-19</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="#">
																<img src="http://localhost/creatu/old-unhabitat/public/images/33.jpg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="#"><h6>Practicing hand hygiene</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="#">
																<img src="http://localhost/creatu/old-unhabitat/public/images/34.jpg" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="#"><h6>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="view-more text-center pb-3">
									<a href="#" class="btn btn3">View More &nbsp;&nbsp; +</a>
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