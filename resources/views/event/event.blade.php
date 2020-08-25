@extends('home-master')



@section('content')

<div class="event">
	<div class="banner">
		<div class="banner-image overlay-bg">
			<img src="{{url('public/images/1.jpg')}}" class="img-fluid overlay-bg" alt="">
		</div>
		<div class="banner-feature">
			<a href="{{url('covid-19_response')}}"><h1>Unhabitat Covid-19 Response By Nepal</h1></a>
		</div>
	</div>

	<div class="container-fluid p-0">
		<div class="owl-carousel owl-theme home-card-carousel">
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="event-card">
						<div class="meta-date">
							<p class="date">
								4
								<span>July</span>
							</p>
						</div>
						<div class="content">
							<div class="title">
								<h4>Event Title Goes Here</h4>
							</div>
							<div class="meta-time">
								<p>12am - 5pm</p>
								<p>@location</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="event-card">
						<div class="meta-date">
							<p class="date">
								15
								<span>July</span>
							</p>
						</div>
						<div class="content">
							<div class="title">
								<h4>Event Title Goes Here</h4>
							</div>
							<div class="meta-time">
								<p>12am - 5pm</p>
								<p>@location</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="event-card">
						<div class="meta-date">
							<p class="date">
								30
								<span>July</span>
							</p>
						</div>
						<div class="content">
							<div class="title">
								<h4>Event Title Goes Here</h4>
							</div>
							<div class="meta-time">
								<p>12am - 5pm</p>
								<p>@location</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="event-card">
						<div class="meta-date">
							<p class="date">
								1
								<span>August</span>
							</p>
						</div>
						<div class="content">
							<div class="title">
								<h4>Event Title Goes Here</h4>
							</div>
							<div class="meta-time">
								<p>12am - 5pm</p>
								<p>@location</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="#" class="carousel-card">
					<div class="event-card">
						<div class="meta-date">
							<p class="date">
								8
								<span>August</span>
							</p>
						</div>
						<div class="content">
							<div class="title">
								<h4>Event Title Goes Here</h4>
							</div>
							<div class="meta-time">
								<p>12am - 5pm</p>
								<p>@location</p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="container mt-5 mb-5">
		<div class="title text-center">
			<h4>Upcoming Events</h4>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<div class="event-detail">
					<div class="notice-detail box-shadow">
						<div class="title">
							<h5 class="mb-0">Title Goes Here</h5>
							<span class="post-date">20 January, 2020</span>
						</div>
						<div class="notice-detail-content">
							<div class="status-meeting content mt-3">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
							<div class="read-more-content">
								<div class="content">
									<p>
										Ultricies mi quis hendrerit dolor. Malesuada proin libero nunc consequat. Arcu cursus euismod quis viverra nibh cras. Nibh cras pulvinar mattis nunc sed blandit libero. Morbi tristique senectus et netus. Tortor pretium viverra suspendisse potenti. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit sed. Proin libero nunc consequat interdum varius sit. Donec et odio pellentesque diam volutpat commodo sed egestas. Arcu vitae elementum curabitur vitae nunc sed. At urna condimentum mattis pellentesque id nibh tortor. Viverra adipiscing at in tellus integer feugiat. Suscipit adipiscing bibendum est ultricies integer quis auctor. In eu mi bibendum neque egestas congue quisque egestas diam.
									</p>
									<p>
										location<br>
										12am - 5pm
									</p>
								</div>
							</div>
							<a class="read-more-btn" title="Read More">Read More</a>
							<div class="share-plugin">
									<ul>
										<li class="facebook">
											<div id="fb-root"></div>
											<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="vMEw29y5"></script>
											<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
										</li>
										<li class="twitter">
											<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
										</li>
									</ul>
								</div>
						</div>
					</div>
					<!-- <div class="sub-title">
						<h5>Title Goes Here</h5>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="location-detail">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.058636846925!2d85.3450849!3d27.6859418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1598163147436!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection