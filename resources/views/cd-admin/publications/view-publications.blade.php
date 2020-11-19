@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Publications Deleted Successfully</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Publications Added Successfully</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Publications Updated Successfully</strong> {{ Session::get('message', '') }}
</div>

@endif

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
	</li>
	<li>
		<span>View Publications</span>
	</li>
</ul>
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View Publications </span>
				</div>
				<div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-publications')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add Publications
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th>SN</th>
							<th>Title </th>
							<th>Category</th>
							<th>Project Name</th>
							<th>Year</th>
							<th>Publisher Name</th>
							<th>Show In Homepage</th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($publications as $publication)
						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{{$publication['title']}}</td>
							<td>
								@foreach($category as $cat)
								@if($cat['id'] == $publication['category_id'])
								<span class="badge badge-success">{{$cat['title']}}</span>
								@endif
								@endforeach
							</td>
							<td align="center">
								@if($publication['project_id'] != NULL)
								@foreach($projects as $project)
								@if($project['id'] == $publication['project_id'])
								<span class="badge badge-success">
									{{$project['title']}}
								</span>
								@endif
								@endforeach
								@else
								<span class="badge badge-danger">No Project Assigned</span>
								@endif

							</td>
							<td>{{$publication['year']}}</td>
							<td>{{$publication['publisher_name']}}</td>
							<td><span class="badge badge-default">{{ucfirst($publication['show_in_homepage'])}}</span></td>
							<td>
								@if($publication['status'] == 'active')
								<span class="badge badge-success"> Active </span>
								@else
								<span class="badge badge-danger"> Inactive </span>
								@endif
							</td>
							
							<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a data-toggle="modal" href="#view-modal{{$publication['id']}}">
												<i class="fa fa-eye"></i> View
											</a>
										</li>
										<li>
											<a href="{{route('edit-publications',$publication['id'])}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li>
										<li>
											<a data-toggle="modal" href="#delete-modal{{$publication['id']}}">
												<i class="fa fa-trash"></i> Delete
											</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>

<!-- view modals -->
@foreach($publications as $ch)
<div id="view-modal{{$ch['id']}}" class="modal fade modal-scroll" tabindex="-1" data-replace="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pull-left">{{$ch['title']}}</h4>
				<p class="modal-title pull-right">Status 
					@if($ch['status'] == 'active')
					<span class="badge badge-success"> Active </span>
					@else
					<span class="badge badge-danger"> Inactive </span>
					@endif
				</p>
			</div>
			<div class="modal-body">
				<img src="{{url('uploads/thumbnail/'.$ch['image'])}}" alt="" class="img-responsive">
				<hr>
				<div class="panel panel-default">
					<div class="panel-heading"> Description </div>
					<div class="panel-body"> {!!$ch['description']!!} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Summary </div>
					<div class="panel-body"> {{$ch['summary']}} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Year </div>
					<div class="panel-body"> {{$ch['year']}} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Pages </div>
					<div class="panel-body"> {{$ch['pages']}} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Publisher Name </div>
					<div class="panel-body"> {{$ch['publisher_name']}} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> File </div>
					<div class="panel-body"> <a href="{{url('uploads/publications/files/'.$ch['file'])}}" target="__blank"><button class="button button-primary">Click To View File</button></a> </div>
				</div>
				{{-- <div class="panel panel-default">
					<div class="panel-heading"> Tags </div>
					<?php $decode = explode(',',$ch['tags']) ?>
					<div class="panel-body"> 
						@foreach($decode as $key=>$d)
						@if($key % 2 == 0)
						<span class="badge badge-primary">{{$d}}</span>
						@else
						<span class="badge badge-default">{{$d}}</span>
						@endif
						@endforeach
					</div>
				</div> --}}
				<h2 align="center">SEO</h2>
				<div class="panel panel-default">
					<div class="panel-heading"> Title </div>
					<div class="panel-body"> {{$ch['seo_title']}} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Description </div>
					<div class="panel-body"> {{$ch['seo_description']}} </div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading"> Keywords </div>
					<div class="panel-body"> {{$ch['seo_keyword']}} </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- delete modal -->

<div class="modal fade" id="delete-modal{{$ch['id']}}" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Delete</h4>
			</div>
			<div class="modal-body"> Are you sure want to delete this ? </div>
			<div class="modal-footer">
				<button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
				<a href="{{url('cd-admin/delete-publications/'.$ch['id'])}}"  class="btn green">YES</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach

@endsection