@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">{{ucfirst($finalCaseStudyList['project']['project_status'])}}
					</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/project_detail/'.$finalCaseStudyList['project']['slug'])}}">{{$finalCaseStudyList['project']['title']}}</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Case Study List</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<div class="related-news-list">
							<div class="container-title">
								<h3>
									<span>
										{{$finalCaseStudyList['project']['title']}}'s Case Study List
									</span>
								</h3>
							</div>
							@if(!isset($finalCaseStudyList['search_term']))
							<div class="row">
								@foreach($finalCaseStudyList['list'] as $case_study)
								<div class="col-md-6 mb-5">
									<a href="{{url('case_list_detail/'.$case_study['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$case_study['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$case_study['title']}}</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>

							<nav aria-label="Page navigation">
								<ul class="pagination">
									{{$finalCaseStudyList['list']->links()}}
								</ul>
							</nav>
							@else
							@if(count($finalCaseStudyList['list']) > 0)
							<h4><b>Search Results for:</b>{{$finalCaseStudyList['search_term']}}</h4>
							<div class="row">
								@foreach($finalCaseStudyList['list'] as $case_study)
								<div class="col-md-6 mb-5">
									<a href="{{url('case_list_detail/'.$case_study['slug'])}}" class="carousel-card newsletter-list">
										<div class="carousel-news">
											<div class="carousel-news-img newsletter-list-img overlay-bg">
												<img src="{{url('uploads/thumbnail/'.$case_study['image'])}}" class="img-fluid overlay-bg" alt="">
											</div>
											<div class="caroursel-news-title text-center">
												<div class="title">
													<h4>{{$case_study['title']}}</h4>
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>
							@else
							<h3 class="text-center">No Case Study Found</h3>
							@endif
							@endif
						</div>
					</div>
				</div>

				<div class="col-md-4 right-container">
					<div class="sidebar box-shadow p-3">
						<form class="search-input" >
							

						</form>
						<form class="search-input" action="{{url('search-project-case-study')}}" method="GET">
							<div class="title">
								<h5>Search</h5>
							</div>
							<div class="form-group">
								<input type="text" name="search_term" class="form-control" placeholder="Enter Search Term" value="<?php echo isset($finalCaseStudyList['search_type']) ? $finalCaseStudyList['search_type'] == 'search' ? $finalCaseStudyList['search_term']:'':'' ?>" required>
								<input type="hidden" name="project_name" value="{{$finalCaseStudyList['project']['slug']}}">
								<input type="hidden" name="type" value="case-study">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</form>
						<hr>
						<form class="search-input" action="{{url('search-project-case-study-year')}}" method="GET">
							<div class="title">
								<h5>Select Year</h5>
							</div>
							<div class="form-group main">
								
								<input type="number" max="{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}}" min="2000" name="year" class="yearpicker form-control" value="<?php echo isset($finalCaseStudyList['search_type']) ? $finalCaseStudyList['search_type'] == 'year' ? $finalCaseStudyList['search_term']:'':'' ?>"  required/>
								<input type="hidden" name="project_name" value="{{$finalCaseStudyList['project']['slug']}}">
								<input type="hidden" name="type" value="case-study">
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