@extends('home-master')



@section('content')


<div class="notice">
	<div class="banner">
	<div class="banner-image overlay-bg">
		<img src="{{url('public/images/36.jpg')}}" class="img-fluid overlay-bg" alt="">
	</div>
	<div class="banner-feature">
		<div class="banner-title">
			<h2>Notice</h2>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb text-center">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Notice Title</li>
			</ol>
		</nav>
	</div>
</div>
	<div class="container">
		<div class="row ma-tb">
			<div class="col-md-8 left-conatiner">
				<div class="left-col">
					<div class="notice-detail box-shadow">
						<div class="title">
							<h5 class="mb-0">Call for Proposal (CFP)</h5>
							<span class="post-date">20 January, 2020</span>
						</div>
						<div class="notice-detail-content">
							<div class="status-meeting content mt-3">
								<p>
									UN-Habitat Nepal Office is now seeking proposals from interested national non-governmental organizations registered in Nepal in implementing part of GLTN project “Promotion of Fit-For-Purpose Land Administration Country Level Strategy in selected Provinces and municipalities in Nepal”. The CFP is open for interested NGOs individually or in Joint Venture/ Consortium with a formal intent to enter into an Agreement of Cooperation with UN-Habitat.
								</p>
							</div>
							<div class="read-more-content">
								<div class="content">
									<p>
										For TOR and details of the CFP, please download from http://www.unhabitat.org.np/files/FFPLA.zip (Please type full web address and is case sensitive)
										<br>
										One set hardcopy proposal and softcopy in pen-drive should be submitted at below mentioned address by 3 February 2020, 5 P.M. Nepal Time. 
									</p>
									<p>
										UN House<br>
										C/O UN-Habitat<br>
										P.O. Box 107, Pulchowk, Kathmandu, NEPAL<br>
									</p>
									<p>
										A pre-bid meeting will be held at UN-Habitat Office at 10 A.M. on 24 January 2020. For any queries please email to unhabitat.nepal@unhabitat.org.np
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
									<li class="facebook-like">
										<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 right-container">
				<div class="popular-post box-shadow">
					<div class="title text-center">
						<h6 class="mb-3">Notice</h6>
					</div>
					<div class="sidebar">
						<div class="link-list mt-4">
							<ul class="">
								<li><a href="{{url('notice')}}">Call for Proposal (CFP)</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection