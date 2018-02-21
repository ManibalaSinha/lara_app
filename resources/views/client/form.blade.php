@extends('layouts.app')
@section('content')
<div class="row">
	<div class="medium-12 large-12 columns">
		<h4>{{ $modify == 1 ? 'Modify Client' : 'New Client' }}</h4>
		<form action="{{ $modify == 1 ? route('update_client', ['client_id' =>1 ]) : route('create_client') }}" method="post">
			<div class="medium-4 columns">
				<label>Title</label>
				<select name="form[title]">
					@foreach($titles as $title)
						<option value="{{ $title }}" >{{ $title }}.</option>
					@endforeach
				</select>
			</div>
			<div class="medium-4 columns">
				<label>Name</label>
				<input type="text" name="form[name]">

			</div>
			<div class="medium-4 columns">
				<label>Last Name</label>
				<input type="text" name="form[name]">

			</div>
	</div>
	
</div>