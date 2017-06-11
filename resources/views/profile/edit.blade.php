@extends ('app')

@section('content')

<div class='container'>

	{!! Form::model($profile, array('route'=>array('profile.update',$profile->id),'method'=>'PUT','class'=>'form')) !!}
				
	<h2>Update Profile: {{ $profile->username }}</h2>

		<div class='form-group'>
			{!! Form::label('User Name') !!}
			{!! Form::text('username', null, array('required', 'class'=>'form-control', 'placeholder'=>'User Name'))!!}
		</div>

		<div class='form-group'>
			{!! Form::label('Email') !!}
			{!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Email'))!!}
		</div>

		<div class='form-group'>
			{!! Form::label('First Name') !!}
			{!! Form::text('firstName', null, array('required', 'class'=>'form-control', 'placeholder'=>'First Name'))!!}
		</div>

		<div class="form-group">
			{!! Form::label('Last Name') !!}
			{!! Form::text('lastName', null, array('required', 'class'=>'form-control', 'placeholder'=>'Last Name')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Mobile') !!}
			{!! Form::text('mobile', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mobile Number')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Update Profile!', array('class'=>'btn btn-primary')) !!}
		</div>

	{!! Form::close() !!}

</div>

@endsection

