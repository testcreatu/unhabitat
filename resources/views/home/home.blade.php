@extends('home-master')



@section('content')

<div class="home-page">
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<a href="{{url('covid-19_response')}}"><h1>Unhabitat Covid-19 Response By Nepal</h1></a>
		</div>
	</div>

	<div class="container p-0 ma-t">
		<div class="container-title">
			<h3>Trending Now</h3>
		</div>
		<div class="owl-carousel owl-theme home-card-carousel">
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/2.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Practicing hand hygiene</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/3.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Learning to hand wash</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/4.png')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Disseminating Message through IEC</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Preparing resilient community to fight against COVID-19</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/6.jpeg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/2.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Practicing hand hygiene</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/3.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Learning to hand wash</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/4.png')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Disseminating Message through IEC</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Preparing resilient community to fight against COVID-19</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/6.jpeg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks</h4>
							</div>
							<span class="post-date">May 12,2020</span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="home-main-post pa-tb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-12 left-container">
					<!-- featured post -->
					<div class="featured-post">
						<div class="container-title">
							<h3>Featured News</h3>
						</div>
						<!-- <div class="title text-center">
							<h6 class="m-0">Featured News</h6>
						</div> -->
						<div class="row p-3 mt-3">
							<div class="col-md-4 mb-3">
								<a href="{{url('featured_news_detail')}}">
									<div class="main-post-card ">
										<div class="post-card-img">
											<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center mt-2">
												<h5 class="mb-0">Learning to hand wash</h5>
												<span class="post-date">May 12,2020</span>
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
												<h5 class="mb-0">Disseminating Message through IEC</h5>
												<span class="post-date">May 12,2020</span>
											</div>
											<div class="content">
												<p>UN Habitat Nepal disseminates the message on essence of Hand Washing and major indicators of total sanitation targeting to people from GSF program.</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 mb-3">
								<a href="{{url('featured_news_detail')}}">
									<div class="main-post-card ">
										<div class="post-card-img">
											<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center mt-2">
												<h5 class="mb-0">Preparing resilient community to fight against COVID-19</h5>
												<span class="post-date">May 12,2020</span>
											</div>
											<div class="content">
												<p>In a wake against COVID-19 havoc, communities across Nepal are suffering from shortage of hand sanitizer. All the shelf of super market and shops are.</p>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="view-more text-center">
							<a href="{{url('featured_news')}}" class="btn btn2">View More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-main-post ma-t">
		<div class="container">
			<!-- recent publish -->
			<div class="recent-publish ma-t">
				<div class="container-title">
					<h3>Recent Publication</h3>
				</div>
				<div class="row p-3 mt-3">
					<div class="col-md-3 mb-3">
						<div class="row">
							<div class="col-md-12 p-0 mb-1">
								<a href="{{url('recent_publish_detail')}}">
									<div class="main-post-card">
										<div class="post-card-img half-post-card-img">
											<img src="{{url('public/images/7.png')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center">
												<h5 class="mb-0">Title goes here</h5>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-12 p-0">
								<a href="{{url('recent_publish_detail')}}">
									<div class="main-post-card">
										<div class="post-card-img half-post-card-img">
											<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center">
												<h5 class="mb-0">Title goes here</h5>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 p-0 pl-1 pr-1">
						<a href="{{url('recent_publish_detail')}}">
							<div class="main-post-card">
								<div class="post-card-img full-post-card-img">
									<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
								</div>
								<div class="post-card-content">
									<div class="sub-title text-center">
										<h5 class="mb-0">Traditional Building Types of Bungamati</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-3">
						<div class="row">
							<div class="col-md-12 p-0 mb-1">
								<a href="{{url('recent_publish_detail')}}">
									<div class="main-post-card">
										<div class="post-card-img half-post-card-img">
											<img src="{{url('public/images/16.png')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center">
												<h5 class="mb-0">Title goes here</h5>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-12 p-0">
								<a href="{{url('recent_publish_detail')}}">
									<div class="main-post-card">
										<div class="post-card-img half-post-card-img">
											<img src="{{url('public/images/17.png')}}" class="img-fluid" alt="">
										</div>
										<div class="post-card-content">
											<div class="sub-title text-center">
												<h5 class="mb-0">Title goes here</h5>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>	
					<!-- <div class="col-md-4 mb-3">
						<div class="main-post-card">
							<div class="post-card-img">
								<a href="{{url('recent_publish_detail')}}">
									<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="sub-title text-center">
								<a href="{{url('recent_publish_detail')}}"><h5 class="mb-0">IEC Materials for COVID-19</h5></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<div class="main-post-card">
							<div class="post-card-img">
								<a href="{{url('recent_publish_detail')}}">
									<img src="{{url('public/images/17.png')}}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="sub-title text-center">
								<a href="{{url('recent_publish_detail')}}"><h5 class="mb-0">Bunga – Abode of the Mystics</h5></a>
							</div>
						</div>
					</div> -->
				</div>
				<div class="view-more text-center">
					<a href="{{url('recent_publish')}}" class="btn btn2">View More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-main-post pa-tb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-12 left-container">
					<!-- foucs quote -->
					<div class="unhabitat-focus ma-t">
						<div class="title">
							<h4>A new focus for UN-Habitat</h4>
						</div>
						<div class="content">
							<p>UN-Habitat promotes transformative change in cities and human settlements through knowledge, policy advice, technical assistance and collaborative action to leave no one and no place behind.</p>
						</div>
						<div class="row mt-4">
							<div class="col-md-3 static-card">
								<div class="focus-card">
									<div class="focus-img">
										<img src="{{url('public/images/12.png')}}" class="img-fluid" alt="">
									</div>
									<div class="content">
										<p>Reduced spatial inequality and poverty in communities across the urban-rural continuum</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 static-card">
								<div class="focus-card">
									<div class="focus-img">
										<img src="{{url('public/images/13.png')}}" class="img-fluid" alt="">
									</div>
									<div class="content">
										<p>Enhanced shared prosperity for cities and regions</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 static-card">
								<div class="focus-card">
									<div class="focus-img">
										<img src="{{url('public/images/14.png')}}" class="img-fluid" alt="">
									</div>
									<div class="content">
										<p>Strengthened climate action and improved urban environment</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 static-card">
								<div class="focus-card">
									<div class="focus-img">
										<img src="{{url('public/images/15.png')}}" class="img-fluid" alt="">
									</div>
									<div class="content">
										<p>Effective urban crises prevention and response</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- sustainable development -->
					<div class="gif-post">
						<div class="container-title">
							<h3>Sustainable Development Goals</h3>
						</div>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<div class="gif-post-img">
											<div class="column">
												<img src="{{url('public/images/9.gif')}}" class="img-fluid" alt="" onclick="myFunction(this);">
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="gif-post-img">
											<div class="column">
												<img src="{{url('public/images/10.gif')}}" class="img-fluid" alt="" onclick="myFunction(this);">
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="gif-post-img">
											<div class="column">
												<img src="{{url('public/images/11.gif')}}" class="img-fluid" alt="" onclick="myFunction(this);">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Close the image -->
								<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

								<!-- Expanded image -->
								<img id="expandedImg" class="tab-img" style="width: 100%;height: 350px;">

								<!-- Image text -->
								<div id="imgtext">Cick the image to view</div>
							</div>
						</div>
					</div>
					<!-- <div class="gif-post p-3">
						<div class="row">
							<div class="col-md-4">
								<div class="gif-post-img">
									<a href="https://sustainabledevelopment.un.org/">
										<img src="{{url('public/images/9.gif')}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="gif-post-img">
									<a href="#">
										<img src="{{url('public/images/10.gif')}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="gif-post-img">
									<a href="#">
										<img src="{{url('public/images/11.gif')}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
					</div> -->

					<div class="container p-0 ma-t">
						<div class="container-title">
							<h3>Recent Video</h3>
						</div>
						<div class="owl-carousel owl-theme home-card-carousel">
							<div class="item">
								<div class="video-card">
									<div class="video-card-img">
										<a href="https://www.youtube.com/embed/dFsK-G5NSNU" target="_blank">
											<img src="https://img.youtube.com/vi/dFsK-G5NSNU/sddefault.jpg">
										</a>
									</div>
									<div class="video-card-title">
										<h6>COVID PROOFING: Reinventing Tranquility in Community</h6>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="video-card">
									<div class="video-card-img">
										<a href="https://www.youtube.com/embed/DgKon3LY5mk" target="_blank">
											<img src="https://img.youtube.com/vi/DgKon3LY5mk/sddefault.jpg">
										</a>
									</div>
									<div class="video-card-title">
										<h6>Carving Heritage of Bungamati</h6>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- latest story -->
					<div class="recent-publish latest-story ma-t">
						
						<div class="row p-3">
							<div class="col-md-8">
								<div class="container-title">
									<h3>Latest Stories</h3>
								</div>
								<div class="lastest-story-card mb-4 mt-4">
									<div class="row">
										<div class="col-md-4">
											<div class="popular-post-img story-card-img">
												<a href="#">
													<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="story-card-content">
												<div class="sub-title">
													<a href="#"><h6 class="mb-0">Practicing hand hygiene</h6></a>
												</div>
												<div class="meta-data">
													<span>12 May 2020</span> <span>By: Admin</span>
												</div>
												<div class="content">
													<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG, Arghakhanchi.</p>
												</div>
											</div>
										</div>
									</div>	
								</div>

								<div class="lastest-story-card">
									<div class="row">
										<div class="col-md-4">
											<div class="popular-post-img story-card-img">
												<a href="#">
													<img src="{{url('public/images/6.jpeg')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="story-card-content">
												<div class="sub-title">
													<a href="#"><h6 class="mb-0">Learning to hand wash</h6></a>
												</div>
												<div class="meta-data">
													<span>12 May 2020</span> <span>By: Admin</span>
												</div>
												<div class="content">
													<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG, Arghakhanchi.
													</p>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
							<div class="col-md-4">
								<div class="container-title">
									<h3>Notice</h3>
								</div>
								<div class="sidebar">
									<div class="link-list mt-4">
										<div class="sub-title">
											<h6>Notice</h6>
										</div>
										<ul class="">
											<li><a href="http://localhost/creatu/unhabitat/notice">Call for Proposal (CFP)</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- <div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
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
								</div>
							</div>
							<div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
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
								</div>
							</div>
							<div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
										<div class="col-5 col-sm-5 col-md-5">
											<div class="popular-post-img">
												<a href="#">
													<img src="{{url('public/images/6.jpeg')}}" class="img-fluid" alt="">
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
							<div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
										<div class="col-5 col-sm-5 col-md-5">
											<div class="popular-post-img">
												<a href="#">
													<img src="{{url('public/images/7.png')}}" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-7 col-sm-7 col-md-7">
											<div class="sub-title">
												<a href="#"><h6>Traditional Building Types of Bungamati</h6></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
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
								</div>
							</div>
							<div class="col-md-4">
								<div class="latest-story-card">
									<div class="row">
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
								</div>
							</div> -->
						</div>
					</div>

					<div class="our-work box-shadow ma-t">
						<div class="title">
							<h4>Our Work</h4>
						</div>
						<div class="content">
							<p>We support countries to improve living conditions for all through sustainable urbanization. UN-Habitat’s work is anchored on scientific data, rigorous research and analysis.</p>
						</div>
						<div class="row mt-4">
							<div class="col-md-4 static-card">
								<div class="our-work-card">
									<p><strong>1 million</strong></p>
									<p>people are benefiting from improved access to water and sanitation</p>
								</div>
							</div>
							<div class="col-md-4 static-card">
								<div class="our-work-card">
									<p><strong>2 million</strong></p>
									<p>slum dwellers have been positively impacted by participatory slum upgrading interventions</p>
								</div>
							</div>
							<div class="col-md-4 static-card">
								<div class="our-work-card">
									<p><strong>250,000</strong></p>
									<p>are enjoying safety and access to 40 public spaces upgraded in 12 countries in the last two years</p>
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