@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="{{url('cd-admin/view-carousel')}}">View Carousel</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Carousel</span>
		</li>
	</ul>
</div>
<!-- END PAGE BAR -->



<div class="row">

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-settings font-dark"></i>
				<span class="caption-subject font-dark sbold uppercase">Add Carousel</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{route('add-carousel')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					
					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
							@if ($errors->has('image'))
							<span class="text-danger">{{ $errors->first('image') }}</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive"> Inactive
									<span></span>
								</label>
							</div>
						</div>
						@if ($errors->has('status'))
						<span class="text-danger">{{ $errors->first('status') }}</span>
						@endif
					</div>
					<!-- status section ends -->

				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Submit</button>
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>

@endsection