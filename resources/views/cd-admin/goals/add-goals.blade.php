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
			<a href="{{url('cd-admin/view-goals')}}">View Goals</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Goals</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Goals</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/add-goals')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf


					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Goal Summary</label>
						<div class="col-md-6">
							<textarea type="file" name="summary" class="form-control" placeholder="Enter Summary">{{old('summary')}}</textarea>
						</div>
					</div>
					@if ($errors->has('summary'))
					<span class="help-block">
						<strong>{{ $errors->first('summary') }}</strong>
					</span>
					@endif
					<div class="form-group{{ $errors->has('priority_no') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Priority Number</label>
						<div class="col-md-6">
							<input type="number" name="priority_no" class="form-control" placeholder="Enter Priority Number" value="{{old('priority_no')}}">
						</div>
					</div>
					@if ($errors->has('priority_no'))
					<span class="help-block">
						<strong>{{ $errors->first('priority_no') }}</strong>
					</span>
					@endif
					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Goal Image</label>
						<div class="col-md-6">
							<input type="file" name="image" class="form-control" placeholder="Enter Service Icon" value="{{old('image')}}" >
						</div>
					</div>
					@if ($errors->has('image'))
					<span class="help-block">
						<strong>{{ $errors->first('image') }}</strong>
					</span>
					@endif
					@if ($errors->has('image.*'))
					<span class="help-block">
						<strong>{{ $errors->first('image.*') }}</strong>
					</span>
					@endif
					<!-- status section starts -->
					{{-- <hr>
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
					</div> --}}
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