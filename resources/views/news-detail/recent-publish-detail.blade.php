@extends('home-master')



@section('content')
	
<div class="publish">	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="publish-detail box-shadow">
					<div class="publish-detail-img">
						<img src="{{url('public/images/7.png')}}" class="img-fluid" alt="">
					</div>
					<div class="title mt-3">
						<h4>Traditional Building Types of Bungamati</h4>
					</div>
					<div class="row meta-content mt-3">	
						<div class="col-4 col-sm-4 col-md-4 publisher">
							<strong>Publisher:</strong>
							<span>UN-HABITAT</span>
						</div>
						<div class="col-3 col-sm-3 col-md-3 publisher">
							<strong>Year:</strong>
							<span>2020</span>
						</div>
						<div class="col-3 col-sm-3 col-md-3 publisher">
							<strong>Pages</strong>
							<span>1</span>
						</div>
						<div class="col-2 col-sm-2 col-md-2 publisher">
							<strong>Download</strong>
							<span class="text-center"><a href="{{url('public/images/1.jpg')}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
						</div>
					</div>	
					<div class="content mt-3">
						<p>
							<strong>About</strong>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="share-plugin mt-3">
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
			<div class="col-md-4">
				<div class="link-list">
					<div class="sub-title">
						<h6>Publication</h6>
					</div>
					<ul class="">
						<li><a href="{{url('recent_publish_detail')}}">IEC Materials for COVID-19</a></li>
						<li><a href="{{url('recent_publish_detail')}}">Bunga – Abode of the Mystics </a></li>
						<li><a href="{{url('recent_publish_detail')}}">Parya Sampada</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection