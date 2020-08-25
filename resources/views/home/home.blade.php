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

	<div class="container-fluid p-0">
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
			<div class="row">
				<div class="col-md-12 left-container">
					<div class="left-col featured-post box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Featured News</h6>
						</div>
						<div class="row p-3 mt-3">
							<div class="col-md-4 mb-3">
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
							<div class="col-md-4 mb-3">
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
							<div class="col-md-4 mb-3">
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
						<div class="view-more text-center">
							<a href="{{url('featured_news')}}" class="btn btn2">View More</a>
						</div>
					</div>

					<div class="left-col recent-publish box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Recent Publication</h6>
						</div>
						<div class="row p-3 mt-3">
							<div class="col-md-4 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<a href="{{url('recent_publish_detail')}}">
											<img src="{{url('public/images/7.png')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center">
										<a href="{{url('recent_publish_detail')}}"><h5 class="mb-0">Traditional Building Types of Bungamati</h5></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
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
							</div>
						</div>
						<div class="view-more text-center">
							<a href="{{url('recent_publish')}}" class="btn btn2">View More</a>
						</div>
					</div>

					<div class="unhabitat-focus">
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

					<div class="gif-post p-3">
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
					</div>

					<div class="left-col recent-publish recent-video box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Recent Videos</h6>
						</div>
						<div class="row p-3 mt-3">
							<div class="col-md-4 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<a href="#">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/DgKon3LY5mk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</a>
									</div>
									<div class="sub-title text-center">
										<a href="#"><h5 class="mb-0">Carving Heritage of Bungamati</h5></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<a href="#">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/NaUSfPDrxqs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</a>
									</div>
									<div class="sub-title text-center">
										<a href="#"><h5 class="mb-0">Nepal Lifetime Experiences Rice Planting Festival</h5></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<a href="#">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/03HwRyK3JTg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</a>
									</div>
									<div class="sub-title text-center">
										<a href="#"><h5 class="mb-0">Kumari: Living Goddess of Bungamati</h5></a>
									</div>
								</div>
							</div>
						</div>
						<div class="view-more text-center">
							<a href="{{url('our_video')}}" class="btn btn2">View More</a>
						</div>
					</div>

					<div class="left-col recent-publish latest-story box-shadow">
						<div class="title text-center">
							<h6 class="m-0">Latest Stories</h6>
						</div>
						<div class="row p-3">
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
							</div>
						</div>
						<div class="view-more text-center">
							<a href="{{url('featured_news')}}" class="btn btn2">View More</a>
						</div>
					</div>

					<div class="our-work box-shadow">
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
				<!-- <div class="col-md-4">
					<div class="right-col" id="sticky-anchor">
						<div class="sidebar box-shadow">
							<div class="popular-post">
								<div class="title box-shadow text-center">
									<h6 class="m-0">Popular News</h6>
								</div>
								<div class="row p-3">
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
								<hr>
								<div class="row p-3">
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
								<hr>
								<div class="row p-3">
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
							<hr>
							<div class="gif-post p-3">
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
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>


@endsection