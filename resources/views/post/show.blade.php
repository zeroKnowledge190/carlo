@extends('layouts.app')
@section('content')
<div class="container">
	<div class="alert alert-info" role="alert">
		<strong>Information: </strong>Do you Accept {{ $sparejam->helper_name }} 's Offer?
		</div>
		<form action="{{ url('post') }}" method="post">
		{{ csrf_field() }}

		<div class="form-group">
		{{ $sparejam->title }}<br>
		<label for="title">Note:</label>
		<input type="text" name="title" id="title" placeholder="Title" value="{{ $sparejam->tasker_name }} Accepted You" class="form-control">
		<input type="text" name="sparetimer" id="title" placeholder="Title" value="{{ $sparejam->helper_name }}" class="form-control">
	<input type="text" name="helper_id" id="title" placeholder="Title" value="{{ $sparejam->helper_id }}" class="form-control">
</div>
<div class="form-group">
	<label for="body">Body</label>
		<textarea type="text" name="body" placeholder="Body" class="form-control">{{ $sparejam->title }}</textarea>
		</div>
		<div class="form-group">
		<input type="submit" name="submit" value="Accept" class="btn btn-primary" />	
		</div>
	</form>
</div>
@endsection