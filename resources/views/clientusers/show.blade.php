@extends('layouts.app')
@section('content')
<div style="height: 2em;" class="container">
<a href="{{ url('/eclaims/create') }}" class="btn btn-xs btn-default">
		<i class="fa fa-plus"></i> Add New Patient</i>
</a> 
<a href="{{ url('/rvs') }}" class="btn btn-xs btn-default">
		<i class="fa fa-plus"></i> List of RVS</i>
</a> 
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #E9D460;">Create RVS</div>
			<div class="panel-body">
				@if(count($errors) > 0)
					<ul>
						@foreach($errors->all() as $error)
							<li class="alert alert-danger">{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				<form enctype="multipart/form-data" method="post" action="/rvs">
				<div class="row">
					<div class="col-md-3">
					{{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
							<div class="form-group">
								<label for="pRVSCode">RVS Code:</label>
							<input type="text" name="pRVSCode" value="{{ $rvs->pRVSCode }}" class="form-control">
						<input type="hidden" name="created_by" readonly value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pRVSName">RVS Name:</label>
							<input type="text" name="pRVSName" value="{{ $rvs->pRVSName }}" class="form-control">
					</div>
				</div>	
				<div class="col-md-3">
					<div class="form-group"><br>
						<?php echo DNS1D::getBarcodeHTML($rvs->pRVSCode , "C128"); ?>
						</div>
					</div>	
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="pMemberFirstName">Description:</label>
							<textarea type="text" name="pRVSDesc" class="form-control"></textarea>
						</div>
					</div>	
				</div>

				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
							<label for="pMemberMiddleName">Related Procedure:</label>
						<input type="text" name="pRelatedPro" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
							<label for="pMemberSuffix">RVS Amount:</label>
						<input type="text" name="pRVSAmount" class="form-control">
						</div>
					</div>
				</div>	
				
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