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
			<a href="{{url('cd-admin/view-social-links')}}">View Social Links</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Social Links</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Social Links</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('store-social-links')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('fb_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Facebook Link</label>
						<div class="col-md-6">
							<input type="url" class="form-control" placeholder="Enter Facebook Link" name="fb_link" value="{{old('fb_link')}}">
						</div>
					</div>


					<div class="form-group{{ $errors->has('twitter_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Twitter Link</label>
						<div class="col-md-6">
							<input type="url" name="twitter_link" class="form-control" placeholder="Enter Twitter Link" value="{{old('twitter_link')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('insta_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Instagram Link</label>
						<div class="col-md-6">
							<input type="url" name="insta_link" class="form-control" placeholder="Enter Instagram Link" value="{{old('insta_link')}}">
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('youtube_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Youtube Link</label>
						<div class="col-md-6">
							<input type="url" name="youtube_link" class="form-control" placeholder="Enter Youtube Link" value="{{old('youtube_link')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('linkedin_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Linkedin Link </label>
						<div class="col-md-6">
							<input type="url" name="linkedin_link" class="form-control" placeholder="Enter Linkedin Link" value="{{old('linkedin_link')}}">
						</div>
					</div>



					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Show/Hide</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="show_status" id="optionsRadios25" value="show" checked=""> Show
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="show_status" id="optionsRadios26" value="hide"> Hide
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