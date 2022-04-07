@extends('layouts.app')
@section('label')
	<b>Red Drop</b>
@endsection
@section('content')
<div style="height: 2em;" class="container">
	<a href="{{ url('clientsusers') }}" class="btn btn-xs btn-warning"><i class="fa fa-backward"></i> Back</i></a>
		<a href="{{ url('clientusers') }}" class="btn btn-xs btn-warning"><i class="fa fa-users"></i> List of Users</i></a> 
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #CF000F; color: #FFFFFF;"><i class="fa fa-btn fa-pencil-square"></i> Patient Primary Information</div>
			<div class="panel-body">
				@if(count($errors) > 0)
					<ul>
						@foreach($errors->all() as $error)
							<li class="alert alert-danger">{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				<form enctype="multipart/form-data"  method="post" action="/clientusers">
				{{ csrf_field() }}
				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="lastname">Lastname:</label>
						<input type="text" name="lastname" class="form-control">
						<input type="hidden" name="clientidno" value="{{ Auth::user()->id }}">
						<input type="hidden" name="created_by" readonly value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control">
						<input type="hidden" name="company_name" value="{{ Auth::user()->company_name }}" class="form-control">
						<input type="hidden" name="network" value="{{ Auth::user()->network }}" class="form-control">
						<input type="hidden" name="region" value="{{ Auth::user()->region }}" class="form-control">
					</div>
				</div>	
				<div class="col-md-3">
					<div class="form-group">
						<label for="pFirstName">Firstname:</label>
						<input type="text" name="firstname" class="form-control">
					</div>
				</div>	
				<div class="col-md-3">
					<div class="form-group">
						<label for="pMiddleName">Middlename:</label>
							<input type="text" name="middlename" class="form-control">
					</div>
				</div>	
				<div class="col-md-3">
					<div class="form-group">
						<label for="designation">Designation:</label>
							<input type="text" name="designation" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="department">Department:</label>
							<input type="text" name="department" class="form-control">
						</div>
					</div>			
				</div>
				<hr></hr>
				<b>User level and granting User Access</b>
				<br />
				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="user_level">User Type:</label>
							<select name="user_level" class="form-control">
								<option value=""></option>
								<option value="Doctor">Resident Physician</option>
								<option value="Laboratory Technician">Laboratory Technician</option>
							<option value="Medical Technologist">Medical Technologist</option>
						</select>
					</div>
				</div>	
				<div class="col-md-4">
					<div class="form-group">
						<label for="user_status">User Status:</label><br>
							<input type="radio" value="Guest" name="user_status"> Guest
							<input type="radio" value="Malicious" name="user_status"> Malicious
							<input type="radio" value="For Approval" name="user_status"> For Approval
							<input type="radio" value="Verified" name="user_status"> Verified
						</div>
					</div>
				</div>
				<hr></hr>
				<b>Login Accounts</b>
				<br />
				<div class="row">
					<div class="col-md-3">
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email">E-Mail Address as your Username:</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="e.g. name@yourmail.com" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password">Password:</label>
							<input id="password" type="password" class="form-control" name="password" required>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="password-confirm">Confirm Password:</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">		
						<input type="submit" value="Submit" class="btn btn-success pull-right">
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection