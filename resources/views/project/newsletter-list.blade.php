@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="row">
			<div class="col-md-9 left-conatiner">
				<div class="left-col">
					<div class="related-news-list box-shadow">
						<div class="title text-center">
							<h6 class="m-0">GSF Newsletter</h6>
						</div>
						
						<div class="row">
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/32.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Sani-News (July-December 2015 ) Volume 4 Issue 2</h5></a>
									</div>
									<div class="content">
										<p>2015 has been a difficult year for Nepal, with the 7.6 magnitude earthquake on 25 April 2015, which was followed by numerous aftershocks and</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/33.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">सरसफाई सन्देश, चैत्र २०७१ – कार्तिक २०७२, बर्ष ४, संयुक्त अंक १०-११</h5></a>
									</div>
									<div class="content">
										<p>विपद् व्यवस्थापन २०७२ बैशाख १२ गते आएको विनाशकारी</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/34.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Sani-News (January-June 2015 ) Volume 4 Issue 1</h5></a>
									</div>
									<div class="content">
										<p>Sanitation at the time of Earthquake The 25 April Earthquake not only shook the ground under our feet but it also shook the sanitation campaign in</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/35.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Sani-News (July-December 2014) Volume 3 Issue 2</h5></a>
									</div>
									<div class="content">
										<p>The declaration of Bajura and Arghakhachi as the 16th and 17th Open Defecation Free (ODF) districts in the country was a major milestone for the GSF</p>
									</div>
								</div>
							</div>
						</div>

						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="col-md-3 right-container">
				<div class="sidebar">
					<div class="link-list box-shadow">
						<div class="sub-title">
							<h6>Quick Link</h6>
						</div>
						<ul>
							<li><a href="{{url('about_us')}}">About</a></li>
							<li><a href="{{url('featured_news')}}">News</a></li>
							<li><a href="{{url('recent_publish')}}">Publication</a></li>
							<li><a href="{{url('case_list')}}">Case Study</a></li>
							<li><a href="{{url('our_video')}}">Videos</a></li>
							<li><a href="{{url('newsletter_list')}}">Newsletters</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="none-sticky"></div>
	</div>
</div>



@endsection