@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Publication</a></li>
    				<li class="breadcrumb-item active" aria-current="page">National Publication</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<div class="related-news-list">
							<div class="container-title">
								<h3>
									<span>
										National Publication
									</span>
								</h3>
							</div>
							
							<div class="row">
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/7.png')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>Traditional Building Types of Bungamati</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/8.jpg')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>IEC Materials for COVID-1</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/17.png')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>Bunga – Abode of the Mystics</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/16.png')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>हरित आवासका अंगहरु</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<nav aria-label="Page navigation">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">«</span>
										</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true">»</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>

				<div class="col-md-4 right-container">
					<div class="sidebar box-shadow p-3">
						<form class="search-input">
							<div class="title">
								<h5>Search</h5>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter Search Term">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</form>
						<hr>
						<form class="search-input">
							<div class="title">
								<h5>Select Year</h5>
							</div>
							<div class="form-group main">
								
								<input type="number" max="{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}}" min="2000" class="yearpicker form-control" value="" />
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>

							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="none-sticky"></div>
		</div>
	</div>
</div>



@endsection