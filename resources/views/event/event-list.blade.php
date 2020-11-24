@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<div class="result pa-b">
				<div class="container-title">
					<h3><span>Event</span></h3>
				</div>
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="box-shadow p-3">
							<a href="{{url('event')}}">
								<div class="container-title">
									<h3><span>Event Title</span></h3>
								</div>
								<div class="sub-title">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</a>
							<div class="view-more text-center pb-3 mt-3">
								<a href="{{url('event')}}" class="btn btn3">Read More &nbsp;&nbsp; +</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection