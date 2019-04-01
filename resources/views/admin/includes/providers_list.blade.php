<table class="table table-hover" id="provider_list">
	<thead>
		<th>Image</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Actions</th>
	</thead>
	<tbody>
		@foreach($providers as $provider)
			<tr>
				<td><img src="{{url('storage/app/public/'.str_replace('providers','providers/thumbs',$provider->avatar))}}" style="width:100px" alt="No Image"></td>
				<td>{{$provider->name}}</td>
				<td>{{$provider->email}}</td>
				<td>{{$provider->address}}</td>
				<td>
				    <a href="javascript:void(0)" id="{{$provider->id}}" class="edit_provider"><i class="fa fa-circle-o-notch fa-spin"></i><i class="fa fa-edit"></i></a>
					<a href="{{route('del_provider',$provider->id)}}" id="{{$provider->id}}" class="delete_provider"><i class="fa fa-trash" aria-hidden="true"></i></a>
					<a href="{{route('show_dashboard',$provider->id)}}" id="{{$provider->id}}" target="_blank" class="delete_provider"><i class="fa fa-eye"></i></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<div class="pagination_link" style="float: right;width: 13%;">
	{{ $providers->links() }}
</div>