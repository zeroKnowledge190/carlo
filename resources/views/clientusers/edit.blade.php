@extends('layouts.app')
	@section('label')
		<b>Red Drop</b>
	@endsection
@section('content')
<div style="height: 2em;" class="container">
	<a href="{{ url('donors') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-backward"></i> Back
	</a>
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #CF000F; color: #FFFFFF;"><i class="fa fa-btn fa-pencil-square"></i> Update User Information</div>
			<div class="panel-body">
				@if(count($errors) > 0)
					<ul>
						@foreach($errors->all() as $error)
							<li class="alert alert-danger">{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				<form enctype="multipart/form-data" method="post" action="/clientusers/{{ $user->id }}">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-3">
						<img src="/uploads/avatars/{{ $user->avatar }}" style="width: 153px; height: 150px; float-left; border-radius:50%; margin-right: 25px;"><br /><br />
					</div>
				</div>
				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="lastname">Name of User:</label><br>
						{{ $user->lastname }} {{ $user->firstname }} {{ $user->middlename }}
					</div>
				</div>	
				<div class="col-md-6">
					<label for="company_name">Name of Hospital:</label> (Please specified) <br>
						{{ $user->company_name }}
				</div>	
				<div class="col-md-3">
					<label for="network">Network Institution:</label><br>
						{{ $user->network }}
					</div>	
				</div>

				<hr></hr>
				<div class="row">
					<div class="col-md-3">
						<label for="tel_no">Telephone No.:</label><br>
						{{ $user->tel_no }}
				</div>	
				<div class="col-md-3">
					<label for="mobile_no">Mobile No.:</label><br>
						{{ $user->contact_no }}
					</div>	
				</div>
	
				<hr></hr>
				<b>Address</b>:
				<div class="row">
					<div class="col-md-3">
						<label for="street">Street:</label><br>
						{{ $user->street }}
				</div>	
				<div class="col-md-3">
					<label for="village">Village (Brgy.):</label><br>
						{{ $user->village }}
				</div>	
				<div class="col-md-3">
					<label for="city">City:</label><br>
						{{ $user->city }}
				</div>	
				<div class="col-md-3">
					<label for="province">Province:</label><br>
						{{ $user->province }}
				</div>	
				<div class="col-md-3">
					<label for="region">Region:</label><br>
						{{ $user->region }}
					</div>
				</div>
				<hr></hr>
				<b>User Level and granting User Access</b>
				<br /><br />
				<form enctype="multipart/form-data" method="post" action="/clientusers/{{ $user->id }}">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="user_status">User Status:</label><br>
							<input type="hidden" name="user_level" value="{{ $user->user_levels }}" class="form-control">
								<input type="radio" value="Guest" name="user_status" {{ $user->user_status == 'Guest' ? 'checked' : '' }}> Guest
								<input type="radio" value="Malicius" name="user_status" {{ $user->user_status == 'Malicious' ? 'checked' : '' }}> Malicious
								<input type="radio" value="For Approval" name="user_status" {{ $user->user_status == 'For Approval' ? 'checked' : '' }}> For Approval
								<input type="radio" value="Verified" name="user_status" {{ $user->user_status == 'Verified' ? 'checked' : '' }}> Verified
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label for="user_level">Granting User Access (Privileges):</label><br>
							<input type="checkbox" value="Inventory" name="inventory" {{ $user->inventory == 'Inventory' ? 'checked' : '' }}> Inventory &nbsp;
								<input type="checkbox" value="Buying" name="buying" {{ $user->buying == 'Buying' ? 'checked' : '' }}> Purchasing &nbsp;
								<input type="checkbox" value="Editing" name="editing" {{ $user->editing == 'Editing' ? 'checked' : '' }}> Updating /Editing &nbsp;
								<input type="checkbox" value="Selling" name="selling" {{ $user->selling == 'Selling' ? 'checked' : '' }}> Selling &nbsp;
								<input type="checkbox" value="Paying" name="paying" {{ $user->selling == 'Paying' ? 'checked' : '' }}> Paying &nbsp;
								<input type="checkbox" value="Doctors Mode" name="doctors_mode" {{ $user->doctors_mode == 'Doctors Mode' ? 'checked' : '' }}> Doctors Mode &nbsp;
							<input type="checkbox" value="Delivery" name="delivery" {{ $user->doctors_mode == 'Delivery' ? 'checked' : '' }}> Delivery &nbsp;
						</div>
					</div>
				</div>   
		
				<br />
				<div class="row">
					<div class="col-md-12">		
						<input type="submit" value="Save" class="btn btn-success pull-right">
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection