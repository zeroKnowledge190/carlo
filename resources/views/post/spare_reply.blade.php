@extends('layouts.app')
@section('content')
<div class="container">
	<div class="alert alert-info" role="alert">
		<strong>Information: </strong>Do you Confirm {{ $sparejam->tasker_name }} 's Offer ?
		</div>
		<form action="{{ url('replypost') }}" method="post">
		{{ csrf_field() }}

		<div class="form-group">
		<label for="title">Note:</label>
		<input type="text" name="title" id="title" placeholder="Title" value="{{ $sparejam->helper_name }} Confirms You" class="form-control">
		<input type="text" name="sparetimer" id="title" placeholder="Title" value="{{ $sparejam->helper_name }}" class="form-control">
	<input type="text" name="host_id" id="host_id" placeholder="Host Id" value="{{ $sparejam->user_id }}" class="form-control">
</div>
<div class="form-group">
	<label for="body">Body</label>
		<textarea type="text" name="body" placeholder="Body" class="form-control">{{ $sparejam->title }}</textarea>
		</div>
		<div class="form-group">
		<input type="submit" name="submit" value="Accept" class="btn btn-primary"/>	
		</div>
	</form>
</div>
@endsection