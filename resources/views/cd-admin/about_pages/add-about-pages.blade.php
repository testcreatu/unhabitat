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
			<a href="{{url('cd-admin/view-about-pages')}}">View About Page</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add About Page</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add About Page</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('add-about-pages')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Page Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Page title" name="title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('priority_no') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Priority Number </label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Priority Number" name="priority_no" value="{{old('priority_no')}}">
						</div>
						@if ($errors->has('priority_no'))
						<span class="text-danger">{{ $errors->first('priority_no') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea type="text" name="description" class="form-control summernote" placeholder="Enter Description">{{old('description')}}</textarea>
						</div>
						@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
						@endif
					</div>

					<!-- seo section starts -->
					<hr>

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