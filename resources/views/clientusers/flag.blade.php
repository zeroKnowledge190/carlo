@extends('layouts.app')
@section('label')
	<b>Red Drop</b>
@endsection
@section('content')
<div style="height: 2em;" class="container">
	<a href="{{ url('/donors/create') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-plus"></i> Add New Donor</i></a> 
	<a href="{{ url('donors') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-bed"></i> List of Donors
	</a>
	<a href="{{ url('/donors') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-bed"></i> Red Flag Donors
	</a>
	<a href="{{ url('items/corepatient/0') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-bed"></i> Walk In Order
	</a>
	<a href="{{ url('orders') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-bed"></i> Orders
	</a>
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #CF000F; color: #FFFFFF;"><i class="fa fa-medkit" aria-hidden="true"></i> Donors</div>
			<div class="panel-body">
				@include('partials._messages_add_new_donor')
				@include('partials._messages_updated')
					<form action="/search_items" method="POST" role="search">
						{{ csrf_field() }}
						<div class="input-group">
						<input type="text" class="form-control" name="q" placeholder="Search Items"> <span class="input-group-btn">
						<button type="submit" class="btn btn-default">
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
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 9em;">Donor ID No.</th>
							<th style="background-color: #6C7A89; color: #FFFFFF;">Donor Name</th>
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 16em;">Blood Centers</th>
							<th style="background-color: #6C7A89; color: #FFFFFF; width: 8em;">Issue</th>
							<th style="text-align: center; background-color: #6C7A89; color: #FFFFFF; width: 9em;">Action</th>
						</tr>
					</thead>
				<tbody>
				
                @foreach($details as $donor)
				<tr>
				
					<td>{{ $donor->pDonorsIdNo }}</td>
						<td>{{ $donor->pFirstname }} {{ $donor->pLastname }}</td>
						<td>{{ $donor->pBloodCenters }}</td>
						<td>{{ $donor->pDonorStatus }}</td>
						<td align="center">
						
						<a href="/donors/edit/{{ $donor->id }}"><button class="btn btn-xs btn-success">Update</button>
						<!--<i style="font-size: 1.5em;" class="btn btn-xs btn-danger fa fa-file-o" data-id="{{ $donor->id }}" title="View" alt="View"></i></a>-->
						</td>
						<!--<td align="center"><button class="btn btn-xs btn-danger" data-id="{{ $donor->id }}" data-toggle="modal" data-target="#jobdelete">Delete</button></td>-->
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
						<form action="/delete_sparejobs/{{ $donor->id }}" method="post">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<div class="modal-body">
						<p class="text-center">Are you sure you want to delete the record ?</p>
						<input type="hidden" name="id" id="id" value="{{ $donor->id }}">
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