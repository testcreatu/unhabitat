@extends('home-master')



@section('content')

<div class="notice project">
	<div class="container">
		<div class="header-margin">
			<div class="result pa-b">
				<div class="container-title">
					<h3><span>Notice</span></h3>
				</div>
				<div class="row">
					@foreach($finalNotice['list'] as $list)
					<div class="col-md-6 mb-4">
						<div class="box-shadow p-3">
							<a href="{{url('notice/'.$list['slug'])}}">
								<div class="container-title">
									<h3><span>{{$list['title']}}</span></h3>
								</div>
								<div class="sub-title">
									<p>{!!$list['summary']!!}</p>
								</div>
							</a>
							<div class="view-more text-center pb-3 mt-3">
								<a href="{{url('notice/'.$list['slug'])}}" class="btn btn3">Read More &nbsp;&nbsp; +</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>



@endsection