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
			<a href="{{url('cd-admin/view-newsletter')}}">View NewsLetter</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add NewsLetter</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add NewsLetter</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('add-newsletter')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('project_id') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Select Project Name  </label>
						<div class="col-md-6">
							<select class="form-control" name="project_id">
								<option selected value="">None</option>
								@foreach($projects as $project)
								<option value="{{$project['id']}}">{{$project['title']}}</option>
								@endforeach
							</select>
						</div>
						@if ($errors->has('project_id'))
						<span class="text-danger">{{ $errors->first('project_id') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter NewsLetter Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter NewsLetter title" name="title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea type="text" name="summary" class="form-control" placeholder="Enter image Description">{{old('summary')}}</textarea>
						</div>
						@if ($errors->has('summary'))
						<span class="text-danger">{{ $errors->first('summary') }}</span>
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

					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload File</label>
						<div class="col-md-9">
							<input type="file" name="file" id="exampleInputFile">
							<p class="help-block"> Upload File. </p>
						</div>
						@if ($errors->has('file'))
						<span class="text-danger">{{ $errors->first('file') }}</span>
						@endif
					</div>

					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO Title<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo title" name="seo_title" value="{{old('seo_title')}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO Keywords<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo keywords" name="seo_keyword" value="{{old('seo_keyword')}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" rows="5" placeholder="Enter seo description" name="seo_description">{{old('seo_description')}}</textarea>
						</div>
						@if ($errors->has('seo_description'))
						<span class="text-danger">{{ $errors->first('seo_description') }}</span>
						@endif
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