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
			<a href="{{url('cd-admin/view-publications')}}">View Publications</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Publications</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Publications</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal"action="{{route('edit-publications',$data['id'])}}" enctype="multipart/form-data" role="form"  method="post" >
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
						<label class="col-md-3 control-label">Enter Publications Title<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter blog title" name="title" value="{{$data['title']}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('publisher_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Publisher Name  <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Publisher Name" name="publisher_name" value="{{$data['publisher_name']}}">
						</div>
						@if ($errors->has('publisher_name'))
						<span class="text-danger">{{ $errors->first('publisher_name') }}</span>
						@endif
					</div>


					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image</label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image Description<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter image Description" value="{{$data['altimage']}}">
						</div>
						@if ($errors->has('altimage'))
						<span class="text-danger">{{ $errors->first('altimage') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload File </label>
						<div class="col-md-9">
							<input type="file" name="file" id="exampleInputFile">
							<p class="help-block"> Upload File. </p>
						</div>
						@if ($errors->has('file'))
						<span class="text-danger">{{ $errors->first('file') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Year <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Publications year" name="year" value="{{$data['year']}}">
						</div>
						@if ($errors->has('year'))
						<span class="text-danger">{{ $errors->first('year') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('pages') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter No. of Pages <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter No of Pages" name="pages" value="{{$data['pages']}}">
						</div>
						@if ($errors->has('pages'))
						<span class="text-danger">{{ $errors->first('pages') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{!!$data['description']!!}</textarea> 
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
					
					{{-- <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Tags</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-large" name="tags" value="{{old('tags')}}" data-role="tagsinput">
						</div>
						@if ($errors->has('tags'))
							<span class="text-danger">{{ $errors->first('tags') }}</span>
							@endif
					</div>
					--}}
					
						<div class="form-group">
						<label class="col-md-3 control-label">Publication Type</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="publication_type" id="optionsRadios25" value="url" <?php echo $data['publication_type'] == 'url' ?'checked':'' ?> onchange="checkType('url')"> URL
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="publication_type" id="optionsRadios26" value="file" <?php echo $data['publication_type'] == 'file' ?'checked':'' ?> onchange="checkType('file')"> File
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}" id="file" <?php echo $data['publication_type'] == 'file'?'style="display:block;"':'style="display:none;"' ?>>
						<label for="exampleInputFile" class="col-md-3 control-label">Upload File <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="file" id="exampleInputFile">
							<p class="help-block"> Upload File. </p>
						</div>
						@if ($errors->has('file'))
						<span class="text-danger">{{ $errors->first('file') }}</span>
						@endif
					</div>

	                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}" id="url" <?php echo $data['publication_type'] == 'url'?'style="display:block;"':'style="display:none;"' ?>>
						<label class="col-md-3 control-label">Enter URL <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Publications url" name="url" value="{{$data['file']}}">
						</div>
						@if ($errors->has('url'))
						<span class="text-danger">{{ $errors->first('url') }}</span>
						@endif
					</div>
					
					@if(Session::has('urlRequired'))
                    <div class="text text-danger">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    	<strong>Either URL or File is Required</strong> {{ Session::get('message', '') }}
                    </div>
                    @endif
					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO Title </label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo title" name="seo_title" value="{{$data['seo_title']}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO keywords </label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo keywords" name="seo_keyword" value="{{$data['seo_keyword']}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description </label>
						<div class="col-md-6">
							<textarea class="form-control" rows="5" placeholder="Enter seo description" name="seo_description">{{$data['seo_description']}}</textarea>
						</div>
						@if ($errors->has('seo_description'))
						<span class="text-danger">{{ $errors->first('seo_description') }}</span>
						@endif
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<div class="form-group">
						<label class="col-md-3 control-label">Show In Homepage</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="show_in_homepage" id="optionsRadios25" value="show" <?php echo $data['show_in_homepage'] == 'show' ?'checked':'' ?>> Show
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="show_in_homepage" id="optionsRadios26" value="hide" <?php echo $data['show_in_homepage'] == 'hide' ?'checked':'' ?>> Hide
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active' ?'checked':'' ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive"<?php echo $data['status'] == 'inactive' ?'checked':'' ?>> Inactive
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
<script>
    function checkType(value)
    {
        if(value == 'url')
        {
            document.getElementById('url').style.display = "block";
            document.getElementById('file').style.display = "none";
        }
        else if(value == 'file')
        {
            document.getElementById('url').style.display = "none";
            document.getElementById('file').style.display = "block";
        }
    }
</script>
@endsection