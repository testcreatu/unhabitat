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
			<a href="{{url('cd-admin/view-about')}}">View About</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit About</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit About</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="{{url('cd-admin/edit-about/'.$about['id'])}}">
				{{csrf_field()}}
				<div class="form-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter about title" name="title" value="{{$about['title']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('background_image') ? ' has-error' : '' }}"> 
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Background Image</label>
						<div class="col-md-9">
							<input type="file" name="background_image" id="exampleInputFile">
							<p class="help-block"> Upload Background Image. </p>
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Description</label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{!!$about['description']!!}</textarea> 
							</div>
						</div>
					</div>


					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="summary">{{$about['summary']}}</textarea>
						</div>
					</div>

					<hr>

					<!-- seo section starts -->
					<h2 align="center">SEO</h2>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  SEO Title</label>
						<div class="col-md-6">
							<div>
								<input name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$about['seo_title']}}"> 
							</div>
						</div>
					</div>

					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO Description</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter SEO Description" name="seo_description">{{$about['seo_description']}}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  SEO Keywords</label>
						<div class="col-md-6">
							<div>
								<input name="seo_keyword" class="form-control" placeholder="Enter SEO Keywords" value="{{$about['seo_keyword']}}"> 
							</div>
						</div>
					</div>
					<!-- status section ends -->

				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Update</button>
							<a href="{{url()->previous()}}"><button type="button" class="btn default">Cancel</button></a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>

@endsection