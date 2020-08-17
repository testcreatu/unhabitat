@extends('home-master')



@section('content')

<div class="news-post-list">
	<div class="container">
		<div class="title text-center mb-4">
			<h2 class="m-0">Recently Publish</h2>
		</div>

		<div class="row recent-publish">
			<div class="col-md-3 mb-3">
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
			<div class="col-md-3 mb-3">
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
			<div class="col-md-3 mb-3">
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
			<div class="col-md-3 mb-3">
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
</div>



@endsection