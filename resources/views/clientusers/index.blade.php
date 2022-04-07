@extends('layouts.app')
	@section('label')
		<b>Red Drop</b>
	@endsection
@section('content')
	<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #CF000F; color: #FFFFFF;"><i class="fa fa-users" aria-hidden="true"></i> Client Area</div>
			<div class="panel-body">
				@include('partials._messages_add_new_donor')
					@include('partials._messages_updated')
						<form action="/search_users" method="POST" role="search">
							{{ csrf_field() }}
								<div class="input-group">
									<input type="text" class="form-control" name="q" placeholder="Search User"> <span class="input-group-btn">
									<button type="submit" class="btn btn-warning">
								<span class="fa fa-btn fa-search"></span>
							</button>
						</span>
					</div>
				</form>
			<br>
			@if(isset($details))
				<table class="table table-bordered">
					<thead>
						<tr>
							<!--<th style="background-color: #6C7A89; color: #FFFFFF; width: 5em;">No.</th>-->
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 3em;">ID No.</th>
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 16em;">Name of User</th>
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 16em;">HCI Name</th>
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 10em;">User Status</th>
						<th style="text-align: center; background-color: #6C7A89; color: #FFFFFF; width: 3em;">Action</th>
					</tr>
				</thead>
			<tbody>
				
            @foreach($details as $user)
			<tr>
				<td>{{ $user->id }}</td>
					<td>{{ $user->firstname }} {{ $user->lastname }}</td>
						<td>{{ $user->company_name }}</td>
						<td>{{ $user->user_status }}</td>
						<td align="center">
							<a href="/clientusers/edit/{{ $user->id }}"><button class="btn btn-xs btn-success"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button>
							<!--<i style="font-size: 1.5em;" class="btn btn-xs btn-danger fa fa-file-o" data-id="{{ $user->id }}" title="View" alt="View"></i></a>-->
							</td>
							<!--<td align="center"><button class="btn btn-xs btn-danger" data-id="{{ $user->id }}" data-toggle="modal" data-target="#jobdelete">Delete</button></td>-->
							</td>
						</tr>
							@endforeach
							</tbody>
						</table>
					<!--<h5><a href="{{ url('/delete_sparejobs') }}"> More Posts </a></h5>-->
				{!! $details->render() !!}
			</div>	
		</section>		

		<div class="modal modal-danger fade" id="jobdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="MymodalLabel">Delete Confirmation</h4>
						</div>
						<form action="/delete_sparejobs/{{ $user->id }}" method="post">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<div class="modal-body">
						<p class="text-center">Are you sure you want to delete the record ?</p>
						<input type="hidden" name="id" id="id" value="{{ $user->id }}">
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="submit" class="btn btn-primary">Yes Delete</button>
						</div>
					</form>
					</div>
				@elseif(isset($message))
			<p>{{ $message }}</p>			
		@endif		
	</div>	
@endsection