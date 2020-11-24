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
			<a href="{{url('cd-admin/view-events')}}">View Events</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Events</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Events</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="POST" action="{{url('/cd-admin/add-events')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Events Title</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter name" value="{{old('title')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Event Date</label>
						<div class="col-md-6">
							<input type="date" name="event_date" class="form-control" placeholder="Enter Event Date" value="{{old('event_date')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('event_time') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Event Time</label>
						<div class="col-md-6">
							<input type="text" name="event_time" class="form-control" placeholder="Enter Event Time" value="{{old('event_time')}}">
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Events Description</label>
						<div class="col-md-6">
							<textarea class="form-control summernote" name="description" >{!!old('description')!!}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Events Summary</label>
						<div class="col-md-6">
							<textarea class="form-control" name="summary" >{!!old('summary')!!}</textarea>
						</div>
					</div>

					



					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo title</label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{old('seo_title')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo keywords</label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{old('seo_keyword')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo description</label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{old('seo_description')}}</textarea>
						</div>
					</div>
					<!-- seo section ends -->


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