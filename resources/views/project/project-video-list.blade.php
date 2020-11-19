@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Project</a></li>
					<li class="breadcrumb-item"><a href="{{url('project_detail_content')}}">Project Content Detail</a></li>
					<li class="breadcrumb-item active" aria-current="page">Videos</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="row recent-publish">
						<div class="col-md-6 mb-3">
							<div class="main-post-card">
								<div class="post-card-img">
									<a href="#" target="_blank">
										<iframe width="560" height="315" target="_blank" src="https://www.youtube.com/embed/NaUSfPDrxqs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</a>
								</div>
								<div class="sub-title text-center">
									<a href="https://www.youtube.com/embed/DgKon3LY5mk" target="_blank"><h5 class="mb-0">Nepal Lifetime Experiences Rice Planting Festival</h5></a>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
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

					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
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