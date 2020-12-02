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
			<a href="{{url('cd-admin/view-blog')}}">View News Files</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add News Files</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add News </span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('/cd-admin/upload-news-csv')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf

					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Upload File</label>
						<div class="col-md-6">
							<input type="file" name="file" class="form-control" placeholder="Enter File ">
						</div>
					</div>
					<!-- status section starts -->
					<hr>
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