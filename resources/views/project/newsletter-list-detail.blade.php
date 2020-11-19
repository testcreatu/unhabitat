@extends('home-master')

@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Project</a></li>
    				<li class="breadcrumb-item"><a href="{{url('project_detail_content')}}">Project Content Detail</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Newsletter List Detail</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 left-conatiner">
					<div class="publish-detail ma-b">
						<div class="publish-detail-img">
							<img src="{{url('public/images/32.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="title mt-3">
							<h4>Sani-News (July-December 2015 ) Volume 4 Issue 2</h4>
						</div>
						<div class="row meta-content mt-3">	
							<div class="col-md-6 publisher">
								<strong>Publisher:</strong>
								<span>UN-HABITAT</span>
							</div>
							<div class="col-md-6 publisher text-center">
								<strong>Download</strong>
								<span class="text-center"><a href="https://onedrive.live.com/download?resid=6A63A96B75C5E0E1!503&authkey=!AMf3rrX7dxY93AU" target="_blank" download><i class="fas fa-download text"></i></a></span>
							</div>
						</div>	
						<div class="content mt-3">
							<p>
								2015 has been a difficult year for Nepal, with the 7.6 magnitude earthquake on 25 April 2015, which was followed by numerous aftershocks and landslides, and the political unrest in Terai and subsequent disturbance in supplies of all essential goods, which started in September continues till the end of 2015.  These events have significantly disturbed the implementation of the GSF programme as well because five of the GSF supported districts were highly affected by the earthquake and 10 GSF supported districts are located in the Terai region.
							</p>
							<p>
								However, in spite of the difficulties, GSF has achieved significant progress in 2015. In response to the Nepal earthquake the GSF programme supported in coordinating the WASH clusters in the Bhaktapur, Sindhupalchowk, Dolakha and Nuwakot districts and worked with partners to provide some immediate relief support. GSF is now in the process of reviving the sanitation campaigns in these districts.
							</p>
							<p>
								In the Terai as well, there has been some progress in spite of the political disturbances. However, much more needs to be done and new challenges have been added. We look forward to a much more productive 2016 and we need your support more than ever as we get closer to the national target of 100% ODF by 2017.
							</p>
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
			</div>
		</div>
	</div>
</div>


@endsection