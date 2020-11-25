@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<div class="result pa-b">
				<div class="container-title">
					<h3><span>Events</span></h3>
				</div>
				<div class="row">
					@foreach($eventList['list'] as $events)
					<div class="col-md-6 mb-4">
						<div class="box-shadow p-3">
							<a href="{{url('event/'.$events['slug'])}}">
								<div class="container-title">
									<h3><span>{{$events['title']}}</span></h3>
								</div>
								<div class="sub-title">
									<p>{{$events['summary']}}</p>
								</div>
							</a>
							<div class="view-more text-center pb-3 mt-3">
								<a href="{{url('event/'.$events['slug'])}}" class="btn btn3">Read More &nbsp;&nbsp; +</a>
							</div>
						</div>
					</div>
					@endforeach
					@if(count($eventList['list']) == 0)
						<h2 class="text-center">No New Events</h2>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>



@endsection