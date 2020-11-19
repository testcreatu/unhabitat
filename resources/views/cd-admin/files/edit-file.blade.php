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
			<a href="{{url('cd-admin/view-files')}}">View Files</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Files</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Files</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('edit-files',$data['id'])}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Select Category </label>
						<div class="col-md-6">
							<select class="form-control" name="category_id">
								@foreach($category as $cat)
								@if($cat['id'] == $data['category_id'])
								<option value="{{$cat['id']}}" selected>{{$cat['title']}}</option>
								@else
								<option value="{{$cat['id']}}">{{$cat['title']}}</option>
								@endif
								@endforeach
							</select>
						</div>
						@if ($errors->has('category_id'))
						<span class="text-danger">{{ $errors->first('category_id') }}</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter File Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter File title" name="title" value="{{$data['title']}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label"><span class="cd-admin-required">*</span>File Type</label>
						<div class="col-md-6">
							<input type="radio" name="type" value="file" onchange="showType('file')" <?php echo $data['type'] == 'file'?'checked':'' ?>>File
							<input type="radio" name="type" value="url" onchange="showType('url')"<?php echo $data['type'] == 'url'?'checked':'' ?>>URL
						</div>
						@if ($errors->has('type'))
						<span class="text-danger">{{ $errors->first('type') }}</span>
						@endif
					</div>


					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}" id="file" <?php echo $data['type'] == 'file'?'style="display: block;"':'style="display: none;"' ?>>
						<label for="exampleInputFile" class="col-md-3 control-label">Upload File <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="file" id="exampleInputFile">
							<p class="help-block"> Upload File. </p>
						</div>
						@if ($errors->has('file'))
						<span class="text-danger">{{ $errors->first('file') }}</span>
						@endif
						@if(Session::has('FileRequired'))
						<strong class="text text-danger">Files is Required</strong> {{ Session::get('message', '') }}
						@endif
					</div>

					<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}" id="url" <?php echo $data['type'] == 'url'?'style="display: block;"':'style="display: none;"' ?>>
						<label class="col-md-3 control-label">Enter URL</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter URL" name="url" value="{{$data['url']}}">
						</div>
						@if ($errors->has('url'))
						<span class="text-danger">{{ $errors->first('url') }}</span>
						@endif
					</div>


					
					<!-- seo section starts -->
					<hr>



					<!-- status section starts -->
					{{-- <hr> --}}
					
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active"  <?php echo $data['status'] == 'active'?'checked':''?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive" <?php echo $data['status'] == 'inactive'?'checked':''?>> Inactive
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

<script type="text/javascript">
	function showType(type) 
	{
		if(type == 'url')
		{
			document.getElementById('url').style.display="block";
			document.getElementById('file').style.display="none";
		}
		else
		{
			document.getElementById('file').style.display="block";
			document.getElementById('url').style.display="none";

		}
	}
</script>
@endsection