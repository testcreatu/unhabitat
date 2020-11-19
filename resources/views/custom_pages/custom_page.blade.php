@extends('home-master')



@section('content')


<div class="notice">

	<div class="container">
		<div class="header-margin">
			
			<div class="row ma-tb">
				<div class="col-md-12">
					<div class="left-col">
						<div class="notice-detail box-shadow">
							<div class="title">
								<h5 class="mb-0">{{$details['title']}}</h5>
							</div>
							<div class="notice-detail-content">
								{!!$details['description']!!}
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

	</div>
</div>



@endsection