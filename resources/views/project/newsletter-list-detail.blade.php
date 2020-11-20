@extends('home-master')

@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">{{ucfirst($finalNewsLetter['project']['project_status'])}}</a></li>
					<li class="breadcrumb-item"><a href="{{url('project_detail/'.$finalNewsLetter['project']['slug'])}}">{{$finalNewsLetter['project']['title']}}</a></li>
					<li class="breadcrumb-item active" aria-current="page">Newsletter List Detail</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 left-conatiner">
					<div class="publish-detail ma-b">
						<div class="publish-detail-img">
							<img src="{{url('uploads/newsletter/image/'.$finalNewsLetter['detail']['image'])}}" class="img-fluid" alt="">
						</div>
						
						<div class="row meta-content mt-3">	
							<div class="col-md-10">
								<div class="title mt-3">
									<h4>{{$finalNewsLetter['detail']['title']}}</h4>
								</div>
							</div>
							<div class="col-md-2 publisher text-center">
								<strong>Download</strong>
								<span class="text-center"><a href="{{url('uploads/newsletter/files/'.$finalNewsLetter['detail']['file'])}}" target="_blank" download><i class="fas fa-download text"></i></a></span>
							</div>
						</div>	
						<div class="content mt-3">
							<p>
								{!!$finalNewsLetter['detail']['description']!!}
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