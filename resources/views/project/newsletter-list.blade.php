@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">{{ucfirst($finalNewsLetterList['project']['project_status'])}}
					</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/project_detail/'.$finalNewsLetterList['project']['slug'])}}">{{$finalNewsLetterList['project']['title']}}</a>
					</li>
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
										{{$finalNewsLetterList['project']['title']}}'s Newsletter
									</span>
								</h3>
							</div>
							@if(!isset($finalNewsLetterList['search_term']))

							<div class="row">
								@foreach($finalNewsLetterList['list'] as $newsletter)
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail/'.$newsletter['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$newsletter['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$newsletter['title']}}</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>

							<nav aria-label="Page navigation">
								<ul class="pagination">
									{{$finalNewsLetterList['list']->links()}}
								</ul>
							</nav>
							@else
							@if(count($finalNewsLetterList['list']) > 0)
							<h4><b>Search Results for:</b>{{$finalNewsLetterList['search_term']}}</h4>
							<div class="row">
								@foreach($finalNewsLetterList['list'] as $newsletter)
								<div class="col-md-6 mb-5">
									<a href="{{url('newsletter_list_detail/'.$newsletter['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$newsletter['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$newsletter['title']}}</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>
							@else
							<h3 class="text-center">No News Found</h3>
							@endif
							@endif
						</div>
					</div>
				</div>

				<div class="col-md-4 right-container">
					<div class="sidebar box-shadow p-3">
						<form class="search-input" >
							

						</form>
						<form class="search-input" action="{{url('search-project-newsletter')}}" method="GET">
							<div class="title">
								<h5>Search</h5>
							</div>
							<div class="form-group">
								<input type="text" name="search_term" class="form-control" placeholder="Enter Search Term" value="<?php echo isset($finalNewsLetterList['search_type']) ? $finalNewsLetterList['search_type'] == 'search' ? $finalNewsLetterList['search_term']:'':'' ?>">
								<input type="hidden" name="project_name" value="{{$finalNewsLetterList['project']['slug']}}">
								<input type="hidden" name="type" value="news">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</form>
						<hr>
						<form class="search-input" action="{{url('search-project-newsletter-year')}}" method="GET">
							<div class="title">
								<h5>Select Year</h5>
							</div>
							<div class="form-group main">
								
								<input type="number" max="{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}}" min="2000" name="year" class="yearpicker form-control" value="<?php echo isset($finalNewsLetterList['search_type']) ? $finalNewsLetterList['search_type'] == 'year' ? $finalNewsList['search_term']:'':'' ?>" />
								<input type="hidden" name="project_name" value="{{$finalNewsLetterList['project']['slug']}}">
								<input type="hidden" name="type" value="news">
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