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
			<a href="{{url('cd-admin/view-all-features')}}">Edit Features</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Features</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Features</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/edit-features/'.$data['id'])}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf


					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Feature Summary</label>
						<div class="col-md-6">
							<textarea type="text" name="summary" class="form-control" placeholder="Enter Feature Summary">{{$data['summary']}}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Feature Image</label>
						<div class="col-md-6">
							<input type="file" name="image" class="form-control" placeholder="Enter Service Icon" value="{{old('image')}}">
						</div>
					</div>

					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active'?'checked':''  ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive" <?php echo $data['status'] == 'inactive'?'checked':''  ?>> Inactive
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