@extends ('app')

@section('content')

<div class='container'>

	{!! Form::open(array('route' => 'posts.store','class' => 'form'))!!}

		<div class='form-group'>
			{!! Form::label('Job Advertisement Name')!!}
			{!! Form::text('name', null, array('required', 'class'=>'form-control','placeholder'=>'Job Name')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Job Type')!!}
			{!! Form::select('job_type', $jobtype, null, array('class' =>'form-control')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Start Time')!!}
			{!! Form::date('startTime', null, array('class'=>'form-control','placeholder'=> date('Y-m-d'))) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('End Time')!!}
			{!! Form::date('endTime', null, array('class'=>'form-control','placeholder'=> date('Y-m-d'))) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Location')!!}
			{!! Form::text('location', null, array('required', 'class'=>'form-control','placeholder'=>'Location')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Vacancy')!!}
			{!! Form::text('vacancy', null, array('required', 'class'=>'form-control','placeholder'=>'Number of vacancy')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Salary')!!}
			{!! Form::text('salary', null, array('required', 'class'=>'form-control','placeholder'=>'Monthly salary of the job')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Description')!!}
			{!! Form::textarea('description', null, array('required', 'class'=>'form-control','placeholder'=>'Something about the job')) !!}
		</div>


		<div class='form-group'>
			{!! Form::submit('Create Post!', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
</div>

@endsection
