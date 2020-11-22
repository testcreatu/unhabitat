@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<div class="result pa-b">
				<div class="container-title">
					<h3>
						<span>Search Result for : {{Request()->search_tag}}</span>
					</h3>
				</div>
				@if(count($finalSearch['news']))
				<div class="latest-story-card">
					<h3 class="container-title">Related News </h3>
					<div class="row">
						@foreach($finalSearch['news'] as $news)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('/featured_news_detail/'.$news['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$news['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url('/featured_news_detail/'.$news['slug'])}}"><h6>{{$news['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif

				@if(count($finalSearch['project']))
				<div class="latest-story-card">
					<h3 class="container-title">Related Projects </h3>
					<div class="row">
						@foreach($finalSearch['project'] as $project)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('/project_detail/'.$project['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$project['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url('/project_detail/'.$project['slug'])}}"><h6>{{$project['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif

				@if(count($finalSearch['case_study']))
				<div class="latest-story-card">
					<h3 class="container-title">Related Case Study </h3>
					<div class="row">
						@foreach($finalSearch['case_study'] as $case_study)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('/case_list_detail/'.$case_study['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$case_study['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url('/case_list_detail/'.$case_study['slug'])}}"><h6>{{$case_study['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif

				@if(count($finalSearch['newsletter']))
				<div class="latest-story-card">
					<h3 class="container-title">Related NewsLetter </h3>
					<div class="row">
						@foreach($finalSearch['newsletter'] as $newsletter)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('/newsletter_list_detail/'.$newsletter['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$newsletter['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url('/newsletter_list_detail/'.$newsletter['slug'])}}"><h6>{{$newsletter['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif


				@if(count($finalSearch['publications']))
				<div class="latest-story-card">
					<h3 class="container-title">Related Publications </h3>
					<div class="row">
						@foreach($finalSearch['publications'] as $publications)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url('/recent_publish_detail/'.$publications['slug'])}}">
									<img src="{{url('uploads/thumbnail/'.$publications['image'])}}" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url('/recent_publish_detail/'.$publications['slug'])}}"><h6>{{$publications['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif

				@if(count($finalSearch['videos']))
				<div class="latest-story-card">
					<h3 class="container-title">Related Videos  </h3>
					<div class="row">
						@foreach($finalSearch['videos'] as $videos)
						<div class="offset-md-2 col-md-3">
							<div class="popular-post-img">
								<a href="{{url($videos['url'])}}" target="_blank">
									<img src="https://img.youtube.com/vi/{{$videos['video_id']}}/sddefault.jpg">
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="sub-title">
								<a href="{{url($videos['url'])}}" target="_blank"><h6>{{$videos['title']}}</h6></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif
				@if(count($finalSearch['notice']))
				<div class="latest-story-card">
					<h3 class="container-title"> Related Notice </h3>
					<div class="row">
						@foreach($finalSearch['notice'] as $notice)
						<div class="offset-md-2 col-md-8">
							<div class="title">
								<a href="{{url('/notice/'.$notice['slug'])}}">
									<h5>{{$notice['title']}}</h5>
								</a>
							</div>
							<div class="sub-title">
								<a href="{{url('/notice/'.$notice['slug'])}}">
									<p>{{$notice['summary']}}</p>
								</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>



@endsection