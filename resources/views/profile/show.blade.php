@extends('app')

@section('content')

<div class='container'>
	@if ($profile->id == Auth::user()->id)
	<h2>Me</h2>
	@else
	<h2>Profile</h2>
	@endif
	<div>
		<p>{{ $profile->user_image }}</p>
		<p>User Name: {{ $profile->username }}</p>
		<p>Email: {{ $profile->email }}</p>
		<p>First Name: {{ $profile->firstName }}</p>
		<p>Last Name: {{ $profile->lastName }}</p>
		<p>Gender: {{ $profile->gender }}</p>
		<p>Mobile: {{ $profile->mobile }}</p>
		@if ($profile->user_type != NULL)
		<p>User Type: {{ App\UserType::find($profile->user_type)->name }}</p>
		@endif
		@if ($profile->user_type == 1)
			<p>Company: {{ $profile->comp_id }}
		@endif
		</p>
	</div>

	<div>
		<p>
		@if ($profile->id == Auth::user()->id)
			{!! Html::linkRoute('profile.edit','Edit',$profile->id,array('class'=>'btn btn-default')) !!}
		@endif
			{!! Html::linkRoute('profile.index','Back',$profile->id,array('class'=>'btn btn-default')) !!}
		</p>
	</div>
</div>

@endsection