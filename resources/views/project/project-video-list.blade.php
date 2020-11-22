@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">{{ucfirst($finalVideoList['project']['project_status'])}}
					</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/project_detail/'.$finalVideoList['project']['slug'])}}">{{$finalVideoList['project']['title']}}</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Videos</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="container-title">
						<h3>
							<span>
								{{$finalVideoList['project']['title']}}'s Videos
							</span>
						</h3>
					</div>
					@if(!isset($finalVideoList['search_term']))
					<div class="row recent-publish">
						@foreach($finalVideoList['list'] as $video)
						<a href="{{url($video['url'])}}" target="_blank">
							<div class="col-md-6 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<img src="https://img.youtube.com/vi/{{$video['video_id']}}/sddefault.jpg">
									</div>
									<div class="sub-title text-center">
										<a href="{{url($video['url'])}}" target="_blank"><h5 class="mb-0">{{$video['title']}}</h5></a>
									</div>
								</div>
							</div>
						</a>

						@endforeach
					</div>

					<nav aria-label="Page navigation">
						<ul class="pagination">
							{{$finalVideoList['list']->links()}}
						</ul>
					</nav>
					@else
					<h4><b>Search Results for:</b>{{$finalVideoList['search_term']}}</h4>
					<div class="row recent-publish">
						@if(count($finalVideoList['list']) > 0)
						@foreach($finalVideoList['list'] as $video)
						<a href="{{url($video['url'])}}" target="_blank">
							<div class="col-md-6 mb-3">
								<div class="main-post-card">
									<div class="post-card-img">
										<img src="https://img.youtube.com/vi/{{$video['video_id']}}/sddefault.jpg">
									</div>
									<div class="sub-title text-center">
										<a href="{{url($video['url'])}}" target="_blank"><h5 class="mb-0">{{$video['title']}}</h5></a>
									</div>
								</div>
							</div>
						</a>
						@endforeach
						@else
						<h3 class="text-center">No Videos Found</h3>
						@endif
					</div>
					@endif
				</div>

				<div class="col-md-4 right-container">
					<div class="sidebar box-shadow p-3">
						<form class="search-input" >
							

						</form>
						<form class="search-input" action="{{url('search-project-video')}}" method="GET">
							<div class="title">
								<h5>Search</h5>
							</div>
							<div class="form-group">
								<input type="text" name="search_term" class="form-control" placeholder="Enter Search Term" value="<?php echo isset($finalVideoList['search_type']) ? $finalVideoList['search_type'] == 'search' ? $finalVideoList['search_term']:'':'' ?>" required>
								<input type="hidden" name="project_name" value="{{$finalVideoList['project']['slug']}}">
								<input type="hidden" name="type" value="video">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</form>
						<hr>
						<form class="search-input" action="{{url('search-project-video-year')}}" method="GET">
							<div class="title">
								<h5>Select Year</h5>
							</div>
							<div class="form-group main">
								
								<input type="number" max="{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}}" min="2000" name="year" class="yearpicker form-control" value="<?php echo isset($finalVideoList['search_type']) ? $finalVideoList['search_type'] == 'year' ? $finalVideoList['search_term']:'':'' ?>" required />
								<input type="hidden" name="project_name" value="{{$finalVideoList['project']['slug']}}">
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