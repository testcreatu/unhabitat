@extends('home-master')



@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">{{ucfirst($finalCaseStudy['project']['project_status'])}}</a></li>
					<li class="breadcrumb-item"><a href="{{url('project_detail/'.$finalCaseStudy['project']['slug'])}}">{{$finalCaseStudy['project']['title']}}</a></li>
					<li class="breadcrumb-item active" aria-current="page">Case Study Detail</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 left-conatiner">
					<div class="left-col">
						<div class="news-detail-post mb-5">
							<div class="news-detail-post-img">
								<img src="{{url('uploads/caseStudy/'.$finalCaseStudy['detail']['image'])}}" class="img-fluid" alt="">
							</div>
							<div class="content mt-2">
								<div class="title">
									<h4 class="mb-0">{{$finalCaseStudy['detail']['title']}}</h4>
								</div>
								<div class="share-plugin mt-3">
									<ul>
										<li class="facebook">
											<div id="fb-root"></div>
											<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=499538454157104&autoLogAppEvents=1" nonce="Ra50b1s9"></script>
											<div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.google.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
										</li>
										<!-- <li class="twitter">
											<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
										</li> -->
									</ul>
								</div>
								<p>{!!$finalCaseStudy['detail']['description']!!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="none-sticky"></div>
		</div>
	</div>
</div>



@endsection



