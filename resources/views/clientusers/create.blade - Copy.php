@extends('layouts.app')
@section('label')
	Core Clinic
@endsection
@section('content')
<div style="height: 2em;" class="container">
	<a href="{{ url('patients') }}" class="btn btn-xs btn-default">
		<i class="fa fa-backward"></i> Back
	</a>
	<a href="{{ url('services') }}" class="btn btn-xs btn-default">
		<i class="fa fa-th-list"></i> List of Services
	</a>
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #48929B; color: #FFFFFF;"><i class="fa fa-medkit" aria-hidden="true"></i> Add New Service</div>
			<div class="panel-body">
				@if(count($errors) > 0)
					<ul>
						@foreach($errors->all() as $error)
							<li class="alert alert-danger">{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				<form enctype="multipart/form-data" method="post" action="/services">
				<div class="row">
					<div class="col-md-6">
						{{ csrf_field() }}
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
								<div class="form-group">
									<input type="hidden" name="pServiceNo" class="form-control">
									<input type="hidden" name="created_by" readonly value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control">	
								<label for="pItemName">Service Name:</label>
							<input type="text" name="pServiceName" class="form-control">
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="pComp1">Component 1:</label>
						<input type="text" name="pComp1" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pSellingDosage1">Volume:</label>
						<input type="text" name="pCompDosage1" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pSellingPrice1">Selling Price:</label>
						<input type="text" name="pCompPrice1" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="pComp2">Component 2:</label>
						<input type="text" name="pComp2" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage2">Volume:</label>
						<input type="text" name="pCompDosage2" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice2">Selling Price:</label>
							<input type="text" name="pCompPrice2" class="form-control">
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp3">Component 3:</label>
						<input type="text" name="pComp3" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage3">Volume:</label>
						<input type="text" name="pCompDosage3" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice3">Selling Price:</label>
							<input type="text" name="pCompPrice3" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp4">Component 4:</label>
						<input type="text" name="pComp4" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage4">Volume:</label>
						<input type="text" name="pCompDosage4" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice4">Selling Price:</label>
						<input type="text" name="pCompPrice4" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp5">Component 5:</label>
						<input type="text" name="pComp5" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage5">Volume:</label>
						<input type="text" name="pCompDosage5" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice5">Selling Price:</label>
						<input type="text" name="pCompPrice5" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp6">Component 6:</label>
						<input type="text" name="pComp6" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage6">Volume:</label>
						<input type="text" name="pCompDosage6" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice6">Selling Price:</label>
						<input type="text" name="pCompPrice6" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp7">Component 7:</label>
						<input type="text" name="pComp7" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage7">Volume:</label>
						<input type="text" name="pCompDosage7" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice7">Selling Price:</label>
						<input type="text" name="pCompPrice7" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp8">Component 8:</label>
						<input type="text" name="pComp8" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage8">Volume:</label>
						<input type="text" name="pCompDosage8" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice">Selling Price:</label>
						<input type="text" name="pCompPrice8" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp9">Component 9:</label>
						<input type="text" name="pComp9" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage9">Volume:</label>
						<input type="text" name="pCompDosage9" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice9">Selling Price:</label>
						<input type="text" name="pCompPrice9" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp10">Component 10:</label>
						<input type="text" name="pComp10" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage10">Volume:</label>
						<input type="text" name="pCompDosage10" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice10">Selling Price:</label>
						<input type="text" name="pCompPrice10" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp11">Component 11:</label>
						<input type="text" name="pComp11" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage11">Volume:</label>
						<input type="text" name="pCompDosage11" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice11">Selling Price:</label>
						<input type="text" name="pCompPrice11" class="form-control">
					</div>
				</div>
			
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp12">Component 12:</label>
						<input type="text" name="pComp12" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage12">Volume:</label>
						<input type="text" name="pCompDosage12" class="form-control">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice12">Selling Price:</label>
						<input type="text" name="pCompPrice12" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp13">Component 13:</label>
						<input type="text" name="pComp13" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage13">Volume:</label>
						<input type="text" name="pCompDosage13" class="form-control">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice13">Selling Price:</label>
						<input type="text" name="pCompPrice13" class="form-control">
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp14">Component 14:</label>
						<input type="text" name="pComp14" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage14">Volume:</label>
						<input type="text" name="pCompDosage14" class="form-control">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice14">Selling Price:</label>
						<input type="text" name="pCompPrice14" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp15">Component 15:</label>
						<input type="text" name="pComp15" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage15">Volume:</label>
						<input type="text" name="pCompDosage15" class="form-control">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice15">Selling Price:</label>
						<input type="text" name="pCompPrice15" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="pComp16">Component 16:</label>
						<input type="text" name="pComp16" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompDosage16">Volume:</label>
						<input type="text" name="pCompDosage16" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pCompPrice16">Selling Price:</label>
						<input type="text" name="pCompPrice16" class="form-control">
					</div>
				</div>

				</div>
				<hr></hr>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="pIVSupply1">IV Supply1:</label>
						<input type="text" name="pIVSupply1" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice1">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice1" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply2">IV Supply 2:</label>
							<input type="text" name="pIVSupply2" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice2">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice2" class="form-control">
						</div>
					</div>
				</div>

				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply3">IV Supply 3:</label>
						<input type="text" name="pIVSupply3" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice3">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice3" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply4">IV Supply 4:</label>
						<input type="text" name="pIVSupply4" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice4">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice4" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply5">IV Supply 5:</label>
						<input type="text" name="pIVSupply5" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice5">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice5" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply6">IV Supply 6:</label>
						<input type="text" name="pIVSupply6" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice6">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice6" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply7">IV Supply 7:</label>
						<input type="text" name="pIVSupply7" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice7">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice7" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply8">IV Supply 8:</label>
						<input type="text" name="pIVSupply8" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice8">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice8" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply9">IV Supply 10:</label>
						<input type="text" name="pIVSupply9" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice9">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice9" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply10">IV Supply 10:</label>
						<input type="text" name="pIVSupply10" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice10">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice10" class="form-control">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply11">IV Supply 11:</label>
						<input type="text" name="pIVSupply11" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice11">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice11" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply12">IV Supply 12:</label>
						<input type="text" name="pIVSupply12" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice12">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice12" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply13">IV Supply 13:</label>
						<input type="text" name="pIVSupply13" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice13">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice13" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply14">IV Supply 14:</label>
						<input type="text" name="pIVSupply14" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice14">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice14" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply15">IV Supply 15:</label>
						<input type="text" name="pIVSupply15" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice15">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice15" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply16">IV Supply 16:</label>
						<input type="text" name="pIVSupply15" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice16">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice16" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply17">IV Supply 17:</label>
						<input type="text" name="pIVSupply17" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice17">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice17" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply18">IV Supply 18:</label>
						<input type="text" name="pIVSupply18" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice18">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice18" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply19">IV Supply 19:</label>
						<input type="text" name="pIVSupply19" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice19">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice19" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupply20">IV Supply 20:</label>
						<input type="text" name="pIVSupply20" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="pIVSupplyPrice20">Selling Price:</label>
							<input type="text" name="pIVSupplyPrice20" class="form-control">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="pUnitPrice">Total Amount:</label>
							<input type="text" name="pUnitPrice" class="form-control">
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