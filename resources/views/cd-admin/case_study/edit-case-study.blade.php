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
			<a href="{{url('cd-admin/view-blog')}}">View Case Study</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Case Study</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Case Study</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('edit-case-study',$data['id'])}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">


					<div class="form-group{{ $errors->has('project_id') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Select Project Name  </label>
						<div class="col-md-6">
							<select class="form-control" name="project_id">
								@if($data['project_id'] == NULL)
								<option selected value="">None</option>
								@foreach($projects as $project)
								<option value="{{$project['id']}}">{{$project['title']}}</option>
								@endforeach
								@else
								<option value="">None</option>
								@foreach($projects as $project)
								@if($project['id'] == $data['project_id'])
								<option value="{{$project['id']}}" selected>{{$project['title']}}</option>
								@else
								<option value="{{$project['id']}}">{{$project['title']}}</option>
								@endif
								@endforeach
								@endif
							</select>
						</div>
						@if ($errors->has('project_id'))
						<span class="text-danger">{{ $errors->first('project_id') }}</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Case Study Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Case Study title" name="title" value="{{$data['title']}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter image Description" value="{{$data['altimage']}}">
						</div>
						@if ($errors->has('altimage'))
						<span class="text-danger">{{ $errors->first('altimage') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{{$data['description']}}</textarea> 
							</div>
						</div>
						@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="summary">{{$data['summary']}}</textarea>
						</div>
						@if ($errors->has('summary'))
						<span class="text-danger">{{ $errors->first('summary') }}</span>
						@endif
					</div>
					
					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter SEO title" name="seo_title" value="{{$data['seo_title']}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO keywords</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter SEO keywords" name="seo_keyword" value="{{$data['seo_keyword']}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description </label>
						<div class="col-md-6">
							<textarea class="form-control" rows="5" placeholder="Enter SEO description" name="seo_description">{{$data['seo_description']}}</textarea>
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
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active'?'checked':'' ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive" <?php echo $data['status'] == 'inactive'?'checked':'' ?>> Inactive
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