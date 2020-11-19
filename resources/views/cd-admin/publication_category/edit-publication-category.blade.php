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
			<a href="{{url('cd-admin/view-notice')}}">View Publication Category</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Publication Category</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Publication Category</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="POST" action="{{route('edit-publication-category',$data['id'])}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Category Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{$data['title']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Category Description</label>
						<div class="col-md-6">
							<textarea class="form-control summernote" name="description" >{!!$data['description']!!}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter URL</label>
						<div class="col-md-6">
							<input type="url" name="url" class="form-control" value="{{$data['url']}}" placeholder="Enter External URL">
						</div>
					</div>



					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{$data['seo_title']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo keywords <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{$data['seo_keyword']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{$data['seo_description']}}</textarea>
						</div>
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active'?'checked':'' ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive"<?php echo $data['status'] == 'inactive'?'checked':'' ?>> Inactive
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