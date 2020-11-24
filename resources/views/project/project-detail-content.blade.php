@extends('home-master')



@section('content')


<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">{{ucfirst($finalProject['detail']['project_status'])}}
					</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$finalProject['detail']['title']}}
					</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-8 left-conatiner">
					<div class="left-col">
						<ul class="nav nav-pills project-detail-tab mb-3" id="project-pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">About</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">Project Report</a>
							</li>
							@foreach($finalProject['custom_pages'] as $custom_pages)
							<li class="nav-item" role="CustomPages">
								<a class="nav-link" id="pills-{{$custom_pages['id']}}-tab" data-toggle="pill" href="#pills-{{$custom_pages['id']}}" role="tab" aria-controls="pills-{{$custom_pages['id']}}" aria-selected="false">{{$custom_pages['title']}}</a>
							</li>
							@endforeach
						</ul>
						<div class="tab-content project-detail-content-tab" id="project-pills-tabContent">
							<div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
								<div class="news-detail-post mb-5">
									<div class="news-detail-post-img">
										<img src="{{url('uploads/thumbnail/'.$finalProject['detail']['image'])}}" class="img-fluid" alt="">
									</div>
									<div class="content mt-2">
										<div class="title">
											<h4 class="mb-0">{{$finalProject['detail']['title']}}</h4>
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
										
										<p>		
											{!!$finalProject['detail']['description']!!}
										</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
								@foreach($finalProject['project_report_categories'] as $project_report)
								<div class="title">
									<h6>{{$project_report['title']}}</h6>
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Document title</th>
											<th scope="col">Download</th>
										</tr>
									</thead>
									<tbody>
										@foreach($project_report['files'] as $files)
										<tr>
											<td class="td-title">{{$files['title']}}</td>
											<td class="td-download">
												@if($files['type'] == 'file')
												<a href="{{url('uploads/files/'.$files['file_name'])}}"><i class="fas fa-download text"></i>
												</a>
												@else
												<a href="{{url($files['url'])}}"><i class="fas fa-download text"></i>
												</a>
												@endif
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@endforeach
							</div>
							@foreach($finalProject['custom_pages'] as $custom_pages_content)
							<div class="tab-pane fade" id="pills-{{$custom_pages_content['id']}}" role="tabpanel" aria-labelledby="pills-{{$custom_pages_content['id']}}-tab">
								<p>{!!$custom_pages_content['description']!!}</p>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-4 right-container">
					<div class="sidebar sidebar-tab mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							@if(count($finalProject['news']) > 0)
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
							</li>
							@endif

							@if(count($finalProject['newsletter']) > 0)
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="newsletter-tab" data-toggle="tab" href="#Newsletter" role="tab" aria-controls="Newsletter" aria-selected="false">Newsletter</a>
							</li>
							@endif
							@if(count($finalProject['videos']) > 0)
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos</a>
							</li>
							@endif	
						</ul>
						<div class="tab-content" id="myTabContent">
							@if(count($finalProject['news']) > 0)
							<div class="tab-pane fade show <?php echo count($finalProject['news']) > 0 ?'active':'' ?>" id="news" role="tabpanel" aria-labelledby="news-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalProject['news'] as $news)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row  tab-rows">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('featured_news_detail/'.$news['slug'])}}">
																<img src="{{url('uploads/thumbnail/'.$news['image'])}}" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="#"><h6>{{substr($news['title'],0,50)}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="view-more text-center pb-3">
										<a href="{{url('project_news_list/'.$finalProject['detail']['slug'])}}" class="btn btn3">View More &nbsp;&nbsp; +</a>
									</div>
								</div>
							</div>
							@endif
							<div class="tab-pane fade" id="Newsletter" role="tabpanel" aria-labelledby="newsletter-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalProject['newsletter'] as $newsletter)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row tab-rows">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('newsletter_list_detail/'.$newsletter['slug'])}}">
																<img src="{{url('uploads/thumbnail/'.$newsletter['image'])}}" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('newsletter_list_detail/'.$newsletter['slug'])}}"><h6>{{$newsletter['title']}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="view-more text-center pb-3">
										<a href="{{url('newsletter_list/'.$finalProject['detail']['slug'])}}" class="btn btn3">View More &nbsp;&nbsp; +</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalProject['videos'] as $videos)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row tab-rows">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url($videos['url'])}}" target="_blank">
																<img src="{{url('https://img.youtube.com/vi/'.$videos['video_id'].'/sddefault.jpg')}}">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url($videos['url'])}}" target="_blank"><h6>{{$videos['title']}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="view-more text-center pb-3">
										<a href="{{url('project_video_list/'.$finalProject['detail']['slug'])}}" class="btn btn3">View More &nbsp;&nbsp; +</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="sidebar sidebar-tab mb-5">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							@if(count($finalProject['publications']) > 0)
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="publication-tab" data-toggle="tab" href="#publication" role="tab" aria-controls="publication" aria-selected="true">Publication</a>
							</li>
							@endif
							@if(count($finalProject['case_study']) > 0)
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="casse-study-tab" data-toggle="tab" href="#caseStudy" role="tab" aria-controls="caseStudy" aria-selected="false">Case Study</a>
							</li>
							@endif
						</ul>
						<div class="tab-content" id="myTabContent">
							@if(count($finalProject['publications']) > 0)
							<div class="tab-pane fade show active" id="publication" role="tabpanel" aria-labelledby="publication-tab">
								<div class="tab-news">
									<div class="row ">
										@foreach($finalProject['publications'] as $publications)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row tab-rows tab-rows">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('recent_publish_detail/'.$publications['slug'])}}">
																<img src="{{url('uploads/thumbnail/'.$publications['image'])}}" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('recent_publish_detail/'.$publications['slug'])}}"><h6>{{$publications['title']}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									<div class="view-more text-center pb-3">
										<a href="{{url('project_publication_list/'.$finalProject['detail']['slug'])}}" class="btn btn3">View More &nbsp;&nbsp; +</a>
									</div>
								</div>
							</div>
							@endif


							@if(count($finalProject['case_study']) > 0)
							<div class="tab-pane fade" id="caseStudy" role="tabpanel" aria-labelledby="casse-study-tab">
								<div class="tab-news">
									<div class="row">
										@foreach($finalProject['case_study'] as $case_study)
										<div class="col-md-12">
											<div class="latest-story-card">
												<div class="row tab-rows">
													<div class="col-5 col-sm-5 col-md-5">
														<div class="popular-post-img">
															<a href="{{url('case_list_detail/'.$case_study['slug'])}}">
																<img src="{{url('uploads/thumbnail/'.$case_study['image'])}}" class="img-fluid" alt="">
															</a>
														</div>
													</div>
													<div class="col-7 col-sm-7 col-md-7">
														<div class="sub-title">
															<a href="{{url('case_list_detail/'.$case_study['slug'])}}"><h6>{{$case_study['title']}}</h6></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
								<div class="view-more text-center pb-3">
									<a href="{{url('case_list/'.$finalProject['detail']['slug'])}}" class="btn btn3">View More &nbsp;&nbsp; +</a>
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection