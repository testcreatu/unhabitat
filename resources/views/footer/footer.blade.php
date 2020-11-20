<footer class="pa-t">
	<div class="container">
		<div class="footer-logo">
			<a class="navbar-brand" href="{{url('/')}}">
				<div class="logo">
					<img src="{{url('public/images/logo-1.png')}}" class="img-fluid" alt="">
				</div>
			</a>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-2 mb-5">
				<section class="footer-quick-link">
					<h2>About us</h2>
					<ul>
						<li>
							<a href="#">Overview</a>
						</li>
						<li>
							<a href="#">Where we are</a>
						</li>
						<li>
							<a href="#">Mandate</a>
						</li>
					</ul>
				</section>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2 mb-5">
				<section class="footer-quick-link">
					<h2>Publication</h2>
					<ul>
						<li>
							<a href="#">National</a>
						</li>
						<li>
							<a href="#">International</a>
						</li>
						<li>
							<a href="#">Flagship</a>
						</li>
					</ul>
				</section>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2 mb-5">
				<section class="footer-quick-link">
					<h2>Media Center</h2>
					<ul>
						<li>
							<a href="#">New Stories</a>
						</li>
						<li>
							<a href="#">Gallery</a>
						</li>
						<li>
							<a href="#">Videos</a>
						</li>
					</ul>
				</section>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2 mb-5">
				<section class="footer-quick-link">
					<h2>Others</h2>
					<ul>
						@foreach($finalFooter['custom_pages'] as $footer)
						<li>
							<a href="{{url('/pages/'.$footer['slug'])}}">{{$footer['title']}}</a>
						</li>
						@endforeach
					</ul>
				</section>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mb-5">
				<section class="footer-quick-link">
					<h2>Connect</h2>
					<ul class="footer-social-link">
						<li>
							<a href="#"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-youtube"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</section>
				<section class="footer-subscribe text-center">
					<h5>Stay updated on sustainable urbanization</h5>
					<form>
						<div class="form-group mb-2">
							<input type="email" class="form-control"  placeholder="Email Address">
							<button type="submit" class="btn btn2">Submit</button>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
	<div class="copyright text-center">
		<div class="container">
			<div class="content">
				<p>Copyright © {{date('Y')}} UN-Habitat Nepal</p>
			</div>
		</div>
	</div>
</footer>



<!-- <footer class="none-sticky">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-link">
					<div class="title text-center">
						<h5 class="mb-0">Quick link</h5>
					</div>
					<ul class="quick-link">
						<li><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Media Center</a></li>
						<li><a href="#">Project</a></li>
						<li><a href="#">Focus Area</a></li>
						<li><a href="#">Publication</a></li>
						<li><a href="#">Event</a></li>
						<li><a href="#">Video</a></li>
						<li><a href="#">Notice</a></li>
						<li><a href="#">Covid-19 Response</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-link">
					<div class="title text-center">
						<h5 class="mb-0">Recent Post</h5>
					</div>
					<div class="latest-story-card">
						<div class="row">
							<div class="col-5 col-sm-5 col-md-5">
								<div class="popular-post-img">
									<a href="#">
										<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-7 col-md-7">
								<div class="sub-title">
									<a href="#"><h6>Preparing resilient community to fight against COVID-19</h6></a>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-5 col-sm-5 col-md-5">
								<div class="popular-post-img">
									<a href="#">
										<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-7 col-md-7">
								<div class="sub-title">
									<a href="#"><h6>Practicing hand hygiene</h6></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-link">
					<div class="title text-center">
						<h5 class="mb-0">Video Of the day</h5>
					</div>
					<div class="video-card">
						<div class="video-card-img">
							<a href="https://www.youtube.com/embed/dFsK-G5NSNU" target="_blank">
								<img src="https://img.youtube.com/vi/dFsK-G5NSNU/sddefault.jpg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer> -->

<!-- <div class="copyright text-center">
	<div class="container">
		<div class="content">
			<p>Copyright © {{date('Y')}} UN-Habitat Nepal</p>
		</div>
	</div>
</div> -->