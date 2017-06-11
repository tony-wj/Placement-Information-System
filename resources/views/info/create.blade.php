@extends ('app')

@section('content')

<div class='container'>

	{!! Form::open(array('route' => 'info.store','class' => 'form'))!!}

		<div class='form-group'>
			{!! Form::label('Name of the infomation')!!}
			{!! Form::text('name', null, array('required', 'class'=>'form-control','placeholder'=>'Name')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Category')!!}
			{!! Form::select('type_id', $infotype, null, array('class' =>'form-control')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Description')!!}
			{!! Form::textarea('description', null, array('required', 'class'=>'form-control','placeholder'=>'Description')) !!}
		</div>


		<div class='form-group'>
			{!! Form::submit('Create Post!', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
</div>

@endsection
