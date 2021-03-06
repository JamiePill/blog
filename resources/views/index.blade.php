@extends('layouts.admin')

@section ('content')

@if(Session::has('info'))
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">{{Session::get('info')}}</p>
	</div>
</div>
@endif

<div class="row">
	<div class="col-md-12">
		<a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-md-12">

		@foreach($posts as $post)
		<p><strong>{{ $post['title']}}</strong><a href="{{ route('admin.edit', ['id' => array_search($post, $posts)]) }}"> Edit</a></p>
		@endforeach

	</div>
</div>
@endsection