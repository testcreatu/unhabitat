@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Project</a></li>
    				<li class="breadcrumb-item"><a href="{{url('project_detail_content')}}">Project Content Detail</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Newsletter List</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<div class="related-news-list">
							<div class="container-title">
								<h3>
									<span>
										GSF Newsletter
									</span>
								</h3>
							</div>
							
							<div class="row">
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/5.jpg')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>Preparing resilient community to fight against COVID-19</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
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
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/6.jpeg')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>Grant Project in Nepal mobilises Bungamati Community to produce Protective Face Masks</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/through-un-habitats-skill-based-training-now-i-can-make-perfect-yomari-and-hoping-to-sell-them-in-future-from-home')}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('public/images/5.jpg')}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>Preparing resilient community to fight against COVID-19</h4>
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