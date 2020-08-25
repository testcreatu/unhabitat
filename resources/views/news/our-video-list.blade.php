@extends('home-master')



@section('content')

<div class="news-post-list">
	<div class="container">
		<div class="title text-center mb-4">
			<h2 class="m-0">Our Video</h2>
		</div>

		<div class="row recent-publish">
			<div class="col-md-4 mb-3">
				<div class="main-post-card">
					<div class="post-card-img">
						<a href="https://www.youtube.com/embed/DgKon3LY5mk" target="_blank">
							<img src="https://img.youtube.com/vi/lfCy78dbcYA/sddefault.jpg">
							<!-- <iframe width="560" height="315" target="_blank" src="https://www.youtube.com/embed/DgKon3LY5mk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</a>
					</div>
					<div class="sub-title text-center">
						<a href="https://www.youtube.com/embed/DgKon3LY5mk" target="_blank"><h5 class="mb-0">Carving Heritage of Bungamati</h5></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
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
			<div class="col-md-4 mb-3">
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
</div>



@endsection