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
			<a href="{{url('cd-admin/view-video-gallery')}}">View Video Gallery</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Video Gallery</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Video Gallery</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="POST" action="{{url('/cd-admin/add-video-gallery')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					
					@csrf

					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Video Title</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{old('title')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Youtube Video URL</label>
						<div class="col-md-6">
							<input type="url" name="url" class="form-control" placeholder="Enter Youtube Video URL" value="{{old('url')}}">
							<small class="cd-admin-required">Please Just Copy the Youtube Video URL</small>
						</div>

					</div>


					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
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
					</div>
					<!-- status section ends -->

				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Submit</button>
							<a href="{{url()->previous()}}" class="btn default">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>

@endsection