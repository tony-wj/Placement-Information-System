@extends('app')

@section('content')

<div class="col-md-6">
	{!! Form::open(array('route' => 'postRegister', 'class' => 'form')) !!}

		<h1>Create an Account</h1>

		@if (count($errors) > 0)

			<div class="alert alert-danger">
				There were some problems creating an account:
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		
		@endif

		<div class="form-group">
		{!! Form::label('username', 'User Name') !!}
		{!! Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Name')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('Your E-mail Address') !!} 
		{!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('Your First Name') !!} 
		{!! Form::text('firstName', null, array('class'=>'form-control', 'placeholder'=>'First Name')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('Your Last Name') !!} 
		{!! Form::text('lastName', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('Your Gender') !!} 
		{!! Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'),null, array('class'=>'form-control')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('Your Mobile') !!} 
		{!! Form::text('mobile', null, array('class'=>'form-control', 'placeholder'=>'Mobile Number')) !!} 		
		</div>

		<div class="form-group">
		{!! Form::label('You Are Employer or Jobseeker?') !!} 
		{!! Form::select('user_type', array('3' => 'Employer', '4' => 'Jobseeker'),null, array('class'=>'form-control')) !!} 		
		</div>




		<div class="form-group">
		    {!! Form::label('Your Password') !!}
		    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) !!} 
		</div>

		<div class="form-group">
		    {!! Form::label('Confirm Password') !!}
		    {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) !!} 
		</div>

		<div class="form-group">
		    {!! Form::submit('Create My Account!', array('class'=>'btn btn-primary')) !!} 
		</div>

	{!! Form::close() !!}

</div>


@endsection
