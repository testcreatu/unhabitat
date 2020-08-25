@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="row">
			<div class="col-md-9 left-conatiner">
				<div class="left-col">
					<div class="related-news-list box-shadow">
						<div class="title text-center">
							<h6 class="m-0">GSF Case Study</h6>
						</div>
						
						<div class="row">
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/29.png')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Saving old age pension to build toilet</h5></a>
									</div>
									<div class="content">
										<p>Bara, Ms Basanta Maya Shrestha, 55 years,a resident of Kolbi VDC in Bara district has constructed her own toilet by saving the old age pension. </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/30.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Gita Devi’s desire to construct toilet</h5></a>
									</div>
									<div class="content">
										<p>Gita Devi, 25 of Betauna VDC, Siraha who lives with her three children and works as an agricultural labor at others place after attending a program </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="main-post-card ">
									<div class="post-card-img">
										<a href="{{url('case_list_detail')}}">
											<img src="{{url('public/images/31.jpg')}}" class="img-fluid" alt="">
										</a>
									</div>
									<div class="sub-title text-center mt-2">
										<a href="{{url('case_list_detail')}}"><h5 class="mb-0">Gold Ear Rings or Toilet…? My best decision ever!</h5></a>
									</div>
									<div class="content">
										<p>Sindhupalchowk, Sunti Maya Tamang, 63, is proud owner of a clean toilet which she constructed after selling her lovely gold earrings. Like others she </p>
									</div>
								</div>
							</div>
						</div>
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
							<li><a href="{{url('gsf_news_list')}}">Newsletters</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="none-sticky"></div>
	</div>
</div>



@endsection