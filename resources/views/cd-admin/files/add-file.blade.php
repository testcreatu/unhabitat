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
			<span>Add Files</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Files</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('add-files')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Select Category </label>
						<div class="col-md-6">
							<select class="form-control" name="category_id">
								<option selected disabled>----Select One Category----</option>
								@foreach($category as $cat)
								<option value="{{$cat['id']}}">{{$cat['title']}}</option>
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
							<input type="text" class="form-control" placeholder="Enter File title" name="title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label"><span class="cd-admin-required">*</span>File Type</label>
						<div class="col-md-6">
							<input type="radio" name="type" value="file" onchange="showType('file')" checked>File
							<input type="radio" name="type" value="url" onchange="showType('url')">URL
						</div>
						@if ($errors->has('type'))
						<span class="text-danger">{{ $errors->first('type') }}</span>
						@endif
					</div>


					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}" id="file" >
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

					<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}" id="url" style="display: none;">
						<label class="col-md-3 control-label">Enter URL</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter URL" name="url" value="{{old('url')}}">
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