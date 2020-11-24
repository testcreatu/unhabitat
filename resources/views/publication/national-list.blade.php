@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Publication</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$finalPublication['category']['title']}} Publication</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 left-conatiner">
					<div class="left-col">
						<div class="related-news-list">
							<div class="container-title">
								<h3>
									<span>
										{{$finalPublication['category']['title']}} Publication
									</span>
								</h3>
							</div>
							
							<div class="row">
								@foreach($finalPublication['list'] as $list)
								<div class="col-md-4 mb-5">
									<a href="{{url('recent_publish_detail/'.$list['slug'])}}" class="carousel-card newsletter-list">
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
									{{$finalPublication['list']->links()}}
								</ul>
							</nav>
						</div>
					</div>
				</div>

				{{-- <div class="col-md-4 right-container">
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
				</div> --}}
			</div>

			<div class="none-sticky"></div>
		</div>
	</div>
</div>



@endsection