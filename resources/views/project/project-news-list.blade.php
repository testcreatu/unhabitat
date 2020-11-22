@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">{{ucfirst($finalNewsList['project']['project_status'])}}</a></li>
					<li class="breadcrumb-item"><a href="{{url('project_detail/'.$finalNewsList['project']['slug'])}}">{{$finalNewsList['project']['title']}}</a></li>
					<li class="breadcrumb-item active" aria-current="page">News List</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<div class="related-news-list">
							<div class="container-title">
								<h3>
									<span>
										{{$finalNewsList['project']['title']}}'s News
									</span>
								</h3>
							</div>
							
							@if(!isset($finalNewsList['search_term']))
							<div class="row">
								@foreach($finalNewsList['list'] as $list)
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/'.$list['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$list['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$list['title']}}</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>

							<nav aria-label="Page navigation">
								<ul class="pagination">
									{{$finalNewsList['list']->links()}}
								</ul>
							</nav>
							@else
							@if(count($finalNewsList['list']) > 0)
							<h4><b>Search Results for:</b>{{$finalNewsList['search_term']}}</h4>
							<div class="row">
								@foreach($finalNewsList['list'] as $list)
								<div class="col-md-6 mb-5">
									<a href="{{url('featured_news_detail/'.$list['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$list['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$list['title']}}</h4>
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
						<form class="search-input" action="{{url('search-project-news')}}" method="GET">
							<div class="title">
								<h5>Search</h5>
							</div>
							<div class="form-group">
								<input type="text" name="search_term" class="form-control" placeholder="Enter Search Term" value="<?php echo isset($finalNewsList['search_type']) ? $finalNewsList['search_type'] == 'search' ? $finalNewsList['search_term']:'':'' ?>" required>
								<input type="hidden" name="project_name" value="{{$finalNewsList['project']['slug']}}">
								<input type="hidden" name="type" value="news">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</form>
						<hr>
						<form class="search-input" action="{{url('search-project-news-year')}}" method="GET">
							<div class="title">
								<h5>Select Year</h5>
							</div>
							<div class="form-group main">
								
								<input type="number" max="{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}}" min="2000" name="year" class="yearpicker form-control" value="<?php echo isset($finalNewsList['search_type']) ? $finalNewsList['search_type'] == 'year' ? $finalNewsList['search_term']:'':'' ?>" required />
								<input type="hidden" name="project_name" value="{{$finalNewsList['project']['slug']}}">
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