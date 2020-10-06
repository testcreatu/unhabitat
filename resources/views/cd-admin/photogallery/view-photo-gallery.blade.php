@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('PhotoDeleteSuccess'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Photo Gallery DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('PhotoAddSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Photo Gallery INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('PhotoEditSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Photo Gallery UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
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
		<span>View Photo Gallery</span>
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
					<span class="caption-subject bold uppercase"> View Photo Gallery </span>
				</div>
				<div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-video-gallery')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add Photo Gallery
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
							<th> Image </th>
							{{-- <th>Status</th> --}}
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($photo as $c)

						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td align="center"><img src="{{url('uploads/thumbnail/'.$c['image'])}}" class="img-fluid rounded" height="100px" width="100px"></td>							
							<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a data-toggle="modal" href="#view-modal{{$c->id}}">
												<i class="fa fa-eye"></i> View
											</a>
										</li>
										{{-- <li>
											<a href="{{url('cd-admin/edit-video-gallery/'.$c->id)}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li> --}}
										<li>
											<a data-toggle="modal" href="#delete-modal{{$c->id}}">
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
@foreach($photo as $ch)
<div id="view-modal{{$ch->id}}" class="modal fade modal-scroll" tabindex="-1" data-replace="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pull-left">{{$ch->title}}</h4>
				<p class="modal-title pull-right">status 
					@if($c->status == 'active')
					<span class="badge badge-success"> Active </span>
					@else
					<span class="badge badge-danger"> In-Active </span>
					@endif
				</p>
			</div>
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading"> Photo</div>
					<div class="panel-body"> <img src="{{url('uploads/thumbnail/'.$ch['image'])}}" class="img-fluid" height="300px" width="300px"> </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- delete modal -->
@foreach($photo as $c)
<div class="modal fade" id="delete-modal{{$c->id}}" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Delete</h4>
			</div>
			<div class="modal-body"> Are you sure want to delete this ? </div>
			<div class="modal-footer">
				<button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
				<a href="{{url('/cd-admin/delete-photo-gallery/'.$c->id)}}"  class="btn green">YES</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach

@endsection