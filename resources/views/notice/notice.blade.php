@extends('home-master')



@section('content')


<div class="notice">
	<div class="container">
		<div class="header-margin">
			<div class="row ma-tb">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<div class="notice-detail box-shadow">
							<div class="title">
								<h5 class="mb-0">{{$notice['title']}}</h5>
								<?php $date = Carbon\Carbon::parse($notice['created_at'])->format('d F, Y') ?>
								<span class="post-date">{{$date}}</span>
							</div>
							<div class="notice-detail-content">
								{!!$notice['description']!!}
								
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
							@foreach($other_notice as $notices)
							<div class="link-list mt-4">
								<ul class="">
									<li><a href="{{url('notice/'.$notices['slug'])}}">{{$notices['title']}}</a></li>
								</ul>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection