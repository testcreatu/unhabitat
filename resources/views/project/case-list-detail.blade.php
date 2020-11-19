@extends('home-master')



@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('#')}}">Project</a></li>
					<li class="breadcrumb-item"><a href="{{url('project_detail_content')}}">Project Content Detail</a></li>
					<li class="breadcrumb-item active" aria-current="page">Case Study Detail</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 left-conatiner">
					<div class="left-col">
						<div class="news-detail-post mb-5">
							<div class="news-detail-post-img">
								<img src="{{url('public/images/29.png')}}" class="img-fluid" alt="">
							</div>
							<div class="content mt-2">
								<div class="title">
									<h4 class="mb-0">Saving old age pension to build toilet</h4>
								</div>
								<p>Bara, Ms Basanta Maya Shrestha, 55 years,a resident of Kolbi VDC in Bara district has constructed her own toilet by saving the old age pension. She used Nrs 5500 of her old age pension. She constructed her own toilet within five days with the help of two labours.</p>

								<p>She also remember those days when she use to defecate in the nearby jungle but due to the daily complain of her neighbhours she stopped defecating there and went to her brother’s toilet. Later her sister-in -law refused her to use the toilet and saw bio-gas toilet in her neighbhours but was unable to build one due to her poor financial condition.Later in the VDC after the GSF programme was implemented,she came to know the importance of the toilet and started building one for herself through the old age pension she used to receive.</p>

								<p>Now she is very much proud to have her own toilet and is also happy that she does not have to listen complain of her neighbhours</p>
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
						</div>
					</div>
				</div>
			</div>
			<div class="none-sticky"></div>
		</div>
	</div>
</div>



@endsection



