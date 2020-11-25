@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Subscriptions Deleted Successfully</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Subscriptions Added Successfully</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Subscriptions Updated Successfully</strong> {{ Session::get('message', '') }}
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
		<span>View Subscriptions</span>
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
					<span class="caption-subject bold uppercase"> View Subscriptions </span>
				</div>
				{{-- <div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-subscription-pages')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add Subscriptions
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div> --}}
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th>SN</th>
							<th>Email </th>
							{{-- <th>Status</th> --}}
							{{-- <th> Actions </th> --}}
						</tr>
					</thead>
					<tbody>
						@foreach($subscriptions as $subscription)
						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{{$subscription['email']}}</td>
							{{-- <td>
								@if($subscription['status'] == 'active')
								<span class="badge badge-success"> Active </span>
								@else
								<span class="badge badge-danger"> Inactive </span>
								@endif
							</td> --}}
							
							{{-- <td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a href="{{url('cd-admin/view-one-subscription-page/'.$subscription['id'])}}"><i class="fa fa-eye"></i> View</a>
										</li>
										<li>
											<a href="{{route('edit-subscription-pages',$subscription['id'])}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li>
										<li>
											<a data-toggle="modal" href="#delete-modal{{$subscription['id']}}">
												<i class="fa fa-trash"></i> Delete
											</a>
										</li>
									</ul>
								</div>
							</td> --}}
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
@foreach($subscriptions as $ch)



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
				<a href="{{url('cd-admin/delete-subscription-pages/'.$ch['id'])}}"  class="btn green">YES</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach

@endsection