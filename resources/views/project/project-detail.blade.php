@extends('home-master')



@section('content')

<div id="projectCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-img overlay-bg">
				<img src="{{url('public/images/18.jpg')}}" class="d-block w-100" alt="...">
			</div>
			<div class="banner-feature">
				<a href="{{url('featured_news_detail')}}">
					<h1>Little girl washing hand at newly installed Eco-Foot Operated Hand Washing Station at Bansighat, Kathmandu</h1>
				</a>
				<a href="{{url('featured_news_detail')}}" class="btn btn2">Read More</a>				
			</div>
		</div>
		<div class="carousel-item">
			<div class="carousel-img overlay-bg">
				<img src="{{url('public/images/19.jpg')}}" class="d-block w-100" alt="...">
			</div>
			<div class="banner-feature">
				<a href="{{url('featured_news_detail')}}">
					<h1>Girl washing hand at Eco-Foot Operated Hand Washing Station at Kalimati Vegetable Market</h1>
				</a>
				<a href="{{url('featured_news_detail')}}" class="btn btn2">Read More</a>				
			</div>
		</div>
		<div class="carousel-item">
			<div class="carousel-img overlay-bg">
				<img src="{{url('public/images/20.jpg')}}" class="d-block w-100" alt="...">
			</div>
			<div class="banner-feature">
				<a href="{{url('featured_news_detail')}}">
					<h1>Hand Washing Station was installed at Kangeshwori Temple</h1>
				</a>
				<a href="{{url('featured_news_detail')}}" class="btn btn2">Read More</a>				
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="notice project">
	<div class="container">
		<div class="row">
			<div class="col-md-9 left-conatiner">
				<div class="left-col">
					<div class="news-detail-post box-shadow mb-5">
						<div class="news-detail-post-img">
							<a href="project_detail_content">
								<img src="{{url('public/images/22.jpg')}}" class="img-fluid" alt="">
							</a>
						</div>
						<div class="content mt-2">
							<div class="title">
								<a href="project_detail_content">
									<h4 class="mb-0">GLOBAL SANITATION FUND PROGRAMME</h4>
								</a>
							</div>
							<p>The Global Sanitation Fund (GSF) is a pooled global fund to boost expenditure on sanitation and hygiene to help large number of poor people to attain safe sanitation services and adopt good hygiene practices. It is estimated that 2.5 billion people, about 40% of the world population, do not have access to basic sanitation. The GSF offers an efficient and cost-effective opportunity for contributors to help the world’s poorest people access this most basic everyday need. The GSF is a programme of the Water Supply and Sanitation Collaborative Council (WSSCC) and was launched in 2008...<a href="project_detail_content">more</a></p>
						</div>
						<div class="share-plugin mt-3">
							<ul>
								<li class="facebook">
									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="Ra50b1s9"></script>
									<div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.google.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
								</li>
								<li class="twitter">
									<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
								</li>
							</ul>
						</div>
					</div>

					<div class="related-news-list box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Related News</h6>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="related-news">
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="related-news-img">
												<a href="{{url('featured_news_detail')}}">
													<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="sub-title">
												<a href="{{url('featured_news_detail')}}">
													<h6 class="mb-0">Practicing hand hygiene</h6>		
												</a>
											</div>
											<div class="content">
												<p>Newly formed children club's members of Kamala Higher Secondary School from Panini RM are caring...
													<a href="{{url('featured_news_detail')}}">read more</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="related-news">
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="related-news-img">
												<a href="{{url('featured_news_detail')}}">
													<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="sub-title">
												<a href="{{url('featured_news_detail')}}">
													<h6 class="mb-0">Learning to hand wash</h6>		
												</a>
											</div>
											<div class="content">
												<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash...
													<a href="{{url('featured_news_detail')}}">read more</a>
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="related-news">
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="related-news-img">
												<a href="{{url('featured_news_detail')}}">
													<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="sub-title">
												<a href="{{url('featured_news_detail')}}">
													<h6 class="mb-0">Disseminating Message through IEC</h6>		
												</a>
											</div>
											<div class="content">
												<p>UN Habitat Nepal disseminates the message on essence of Hand Washing and major indicators of total sanitation...
													<a href="{{url('featured_news_detail')}}">read more</a>
												</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="related-news">
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="related-news-img">
												<a href="{{url('featured_news_detail')}}">
													<img src="{{url('public/images/21.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="sub-title">
												<a href="{{url('featured_news_detail')}}">
													<h6 class="mb-0">Morang district declared as 66th ODF District</h6>		
												</a>
											</div>
											<div class="content">
												<p>July 6 2019, Morang: Morang district has been declared as a fully literate and open defecation free district...
													<a href="{{url('featured_news_detail')}}">read more</a>
												</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- <div class="notice-detail project-list box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Global Sanitation Fund Programme Nepal</h6>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('featured_news_detail')}}">
											<img src="{{url('public/images/18.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Little girl washing hand at newly installed Eco-Foot Operated Hand Washing Station at Bansighat, Kathmandu</h5></a>
										<span class="post-date">July 26,2020</span>
									</div>
									<div class="content">
										<p>Little girl washing hand at newly installed Eco-Foot Operated Hand Washing Station at Bansighat, Kathmandu</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('featured_news_detail')}}">
											<img src="{{url('public/images/19.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Girl washing hand at Eco-Foot Operated Hand Washing Station at Kalimati Vegetable Market</h5></a>
										<span class="post-date">July 26,2020</span>
									</div>
									<div class="content">
										<p>Girl washing hand at Eco-Foot Operated Hand Washing Station at Kalimati Vegetable Market. UN-Habitat Nepal had installed 20 such hand washing </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('featured_news_detail')}}">
											<img src="{{url('public/images/20.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('featured_news_detail')}}"><h5 class="mb-0">Hand Washing Station was installed at Kangeshwori Temple</h5></a>
										<span class="post-date">July 26,2020</span>
									</div>
									<div class="content">
										<p>Handover of Eco-Foot Operated Hand Washing Station with Mr. Sashi Lal Shrestha, Ward Chairperson of Kathmandu Metropolitan City – 19. Hand Washing Station was installed at Kangeshwori Temple </p>
									</div>
								</div>
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
					</div> -->


				</div>
			</div>

			<div class="col-md-3 ">
				<div class="sidebar">
					<div class="link-list box-shadow">
						<div class="sub-title">
							<h6>Quick Link</h6>
						</div>
						<ul>
							<li class="{{ (request()->is('project_detail_content*')) ? 'active' : '' }}"><a href="{{url('about_us')}}">About</a></li>
							<li><a href="{{url('featured_news')}}">News</a></li>
							<li><a href="{{url('recent_publish')}}">Publication</a></li>
							<li class="{{ (request()->is('case_list')) ? 'active' : '' }}"><a href="{{url('case_list')}}">Case Study</a></li>
							<li><a href="{{url('our_video')}}">Videos</a></li>
							<li><a href="{{url('newsletter_list')}}">Newsletters</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
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
	</div>
</div>



@endsection