@extends('home-master')



@section('content')

<div class="home-page">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item carousel-img active">
				<img class="d-block w-100" src="{{url('public/images/37.jpg')}}" alt="First slide">
			</div>
			<div class="carousel-item carousel-img">
				<img class="d-block w-100" src="{{url('public/images/38.jpg')}}" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
			<div class="item">
				<a href="{{url('featured_news_detail')}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/2.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Practicing hand hygiene</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('featured_news_detail')}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/3.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Learning to hand wash</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('featured_news_detail')}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/4.png')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Disseminating Message through IEC</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('featured_news_detail')}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/5.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Preparing resilient community to fight</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('featured_news_detail')}}" class="carousel-card">
					<div class="carousel-news">
						<div class="carousel-news-img overlay-bg">
							<img src="{{url('public/images/2.jpg')}}" class="img-fluid overlay-bg" alt="">
						</div>
						<div class="caroursel-news-title text-center">
							<div class="title">
								<h4>Practicing hand hygiene</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
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
					<a href="{{url('featured_news_detail')}}">
						<div class="main-post-card ">
							<div class="post-card-img full-post-card-img">
								<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="post-card-content">
								<div class="sub-title text-center mt-2">
									<h5 class="mb-0">Learning to hand wash</h5>
								</div>
								<div class="content">
									<p>Washing hands can prevent the spread of COVID 19. Women are learning about the steps of hand washing in initiation of Prakash Sachetan Samuha PRAG lorem</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<div class="row">
						<div class="col-md-12 mb-3">
							<a href="{{url('recent_publish_detail')}}">
								<div class="main-post-card ">
									<div class="post-card-img post-card-half-img">
										<img src="{{url('public/images/4.png')}}" class="img-fluid" alt="">
									</div>
									<div class="post-card-content half-post-card-content">
										<div class="sub-title text-center mt-2">
											<h5 class="mb-0">Disseminating Message through IEC</h5>
										</div>
										<div class="content">
											<p>UN Habitat Nepal disseminates the message on essence of Hand Washing.</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-12 mb-3">
							<a href="{{url('recent_publish_detail')}}">
								<div class="main-post-card ">
									<div class="post-card-img post-card-half-img">

										<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
									</div>
									<div class="post-card-content half-post-card-content">
										<div class="sub-title text-center mt-2">
											<h5 class="mb-0">Preparing community to fight against COVID-19</h5>
										</div>
										<div class="content">
											<p>In a wake against COVID-19 havoc, communities across Nepal.</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-12 mb-3">
							<a href="{{url('recent_publish_detail')}}">
								<div class="main-post-card ">
									<div class="post-card-img post-card-half-img">

										<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
									</div>
									<div class="post-card-content half-post-card-content">
										<div class="sub-title text-center mt-2">
											<h5 class="mb-0">Practicing hand hygiene</h5>
										</div>
										<div class="content">
											<p>In a wake against COVID-19 havoc, communities across Nepal.</p>
										</div>
									</div>
								</div>
							</a>
						</div>
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
				<div class="col-md-6">
					<a href="{{url('featured_news_detail')}}">
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
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mb-4">
							<a href="{{url('featured_news_detail')}}">
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
						<div class="col-md-6 mb-4">
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
						<div class="col-md-6 mb-4">
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
						<div class="col-md-6 mb-4">
							<a href="{{url('recent_publish_detail')}}">
								<div class="main-post-card">
									<div class="post-card-img half-post-card-img">
										<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
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
			</div>
			<div class="view-more text-center mt-4">
				<a href="{{url('recent_publish')}}" class="btn btn2">View More &nbsp;&nbsp; +</a>
			</div>
		</div>
	</div>

	<!-- foucs quote -->
	<div class="container-fluid unhabitat-focus ma-t">
		<div class="container">
			<div class="title">
				<h4>A new focus for UN-Habitat</h4>
			</div>
			<div class="content">
				<p>UN-Habitat promotes transformative change in cities and human settlements through knowledge, policy advice, technical assistance and collaborative action to leave no one and no place behind.</p>
			</div>
			<div class="row mt-5">
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
	</div>

	<!-- sustainable development -->
	<div class="container">
		<div class="sustainable-goal ma-tb">
			<div class="container-title">
				<h3>
					<span>
						Sustainable Development Goals
					</span>
				</h3>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png1.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png2.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png3.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png4.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png5.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png6.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png7.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png8.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png9.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png10.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png11.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png12.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png13.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png14.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png15.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png16.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/png17.png')}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-2 p-1">
							<div class="goal-img">
								<img src="{{url('public/images/logo.png')}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div id="sustainableCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item goal-carousel-img active">
								<img class="d-block w-100" src="{{url('public/images/png1.png')}}" alt="">
							</div>
							<div class="carousel-item goal-carousel-img">
								<img class="d-block w-100" src="{{url('public/images/png2.png')}}" alt="">
							</div>
							<div class="carousel-item goal-carousel-img">
								<img class="d-block w-100" src="{{url('public/images/png3.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="container ma-t">
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
						<div class="col-md-6">
							<div class="thumbs">    
								<img src="{{url('public/images/2.jpg')}}" rel="{{url('public/images/2.jpg')}}" class="zoom" />
								<img src="{{url('public/images/3.jpg')}}" rel="{{url('public/images/3.jpg')}}" class="zoom" />
								<img src="{{url('public/images/5.jpg')}}" rel="{{url('public/images/5.jpg')}}" class="zoom" />
								<img src="{{url('public/images/6.jpeg')}}" rel="{{url('public/images/6.jpeg')}}" class="zoom" />
								<img src="{{url('public/images/4.png')}}" rel="{{url('public/images/4.png')}}" class="zoom" />
								<img src="{{url('public/images/7.png')}}" rel="{{url('public/images/7.png')}}" class="zoom" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="preview">
								<img src="http://placehold.it/400x220">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
				<div class="item">
					<div class="video-card">
						<div class="video-card-img">
							<a href="https://www.youtube.com/embed/NaUSfPDrxqs" target="_blank">
								<img src="https://img.youtube.com/vi/NaUSfPDrxqs/sddefault.jpg">
							</a>
						</div>
						<div class="video-card-title">
							<h6>Nepal Lifetime Experiences Rice Planting Festival</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="view-more text-center mt-4">
				<a href="{{url('our_video')}}" class="btn btn2">View More &nbsp;&nbsp; +</a>
			</div>
		</div>
	</div>


	<!-- latest story -->
	<div class="container ma-t">	
		<div class="recent-publish latest-story">
			<div class="container-title">
				<h3>
					<span>Latest Stories</span>
				</h3>
			</div>
			<div class="row p-3">
				<div class="col-md-6">
					<a href="{{url('featured_news_detail')}}">
						<div class="latest-story-card">
							<div class="row">
								<div class="col-md-4">
									<div class="popular-post-img story-card-img">
											<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<div class="col-md-8">
									<div class="story-card-content">
										<div class="sub-title">
											<h6 class="mb-0">Practicing hand hygiene</h6>
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
					</a>
				</div>
				<div class="col-md-6">
					<a href="{{url('featured_news_detail')}}">
						<div class="latest-story-card">
							<div class="row">
								<div class="col-md-4">
									<div class="popular-post-img story-card-img">
										<img src="{{url('public/images/6.jpeg')}}" class="img-fluid" alt="">
									</div>
								</div>
								<div class="col-md-8">
									<div class="story-card-content">
										<div class="sub-title">
											<h6 class="mb-0">Learning to hand wash</h6>
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
					</a>
				</div>
				<!-- <div class="col-md-4">
					<div class="container-title">
						<h3>
							<span>Notice</span>
						</h3>
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
				</div> -->
			</div>
		</div>
	</div>

	<!-- our work -->
	<div class="container-fluid our-work box-shadow ma-t">
		<div class="container">
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

@endsection