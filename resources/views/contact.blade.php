@extends('template')

@section('title', 'Contact Us')

@section('content')
    <div class="title m-b-md">
        Contact Me
    </div>

    <form>
	
		<label>Name</label>
		<input type="text" name="name" placeholder="Name">

		<label>Comments</label>
		<textarea></textarea>

		<button type="submit"></button>

	</form>
@endsection