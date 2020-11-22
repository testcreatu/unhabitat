@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<div class="result pa-b">
				<div class="container-title">
					<h3>
						<span>Search Result</span>
					</h3>
				</div>
				<div class="latest-story-card">
					<div class="row">
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('')}}">
									<img src="{{url('public/images/18.jpg')}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="#"><h6>Little girl washing hand at newly installed Eco-Foot Operated Hand Washing Station at Bansighat, Kathmandu</h6></a>
							</div>
						</div>
					</div>
				</div>

				<div class="latest-story-card">
					<div class="row">
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('')}}">
									<img src="{{url('public/images/18.jpg')}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="#"><h6>Little girl washing hand at newly installed Eco-Foot Operated Hand Washing Station at Bansighat, Kathmandu</h6></a>
							</div>
						</div>
					</div>
				</div>

				<div class="latest-story-card">
					<div class="row">
						<div class="offset-md-2 col-md-8">
							<div class="title">
								<a href="{{url('')}}">
									<h5>Practicing hand hygiene</h5>
								</a>
							</div>
							<div class="sub-title">
								<a href="#">
									<p>Newly formed children club's members of Kamala Higher Secondary School from Panini RM are caring their hands with soap and water. PC: PRAG</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection