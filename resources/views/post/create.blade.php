@extends('layouts.app')

@section('content')

<div class="container">

<h1>Create Post</h1>

<form action="{{ url('post') }}" method="post">
{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" id="title" placeholder="Title" class="form-control">
</div>

<div class="form-group">
	<label for="body">Body</label>
	<textarea type="text" name="body" placeholder="Body" class="form-control"></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Add Post" class="btn btn-primary" />
</div>
</form>

</div>
@endsection