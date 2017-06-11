@extends ('app')

@section('content')

<div class='container'>

	{!! Form::model($post, array('route'=>array('posts.update',$post->id),'method'=>'PUT','class'=>'form')) !!}
				
	<h2>Update Advertisement: {{ $post->name }}</h2>

		<div class='form-group'>
			{!! Form::label('Start Time')!!}
			{!! Form::date('startTime', null, array('class'=>'form-control','placeholder'=> date('Y-m-d'))) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('End Time')!!}
			{!! Form::date('endTime', null, array('class'=>'form-control','placeholder'=> date('Y-m-d'))) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Location') !!}
			{!! Form::text('location', null, array('required', 'class'=>'form-control', 'placeholder'=>'Location'))!!}
		</div>

		<div class='form-group'>
			{!! Form::label('Vacancy') !!}
			{!! Form::text('vacancy', null, array('required', 'class'=>'form-control', 'placeholder'=>'Vacancy'))!!}
		</div>

		<div class='form-group'>
			{!! Form::label('Salary') !!}
			{!! Form::text('salary', null, array('required', 'class'=>'form-control', 'placeholder'=>'Salary'))!!}
		</div>

		<div class="form-group">
			{!! Form::label('Description') !!}
			{!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder'=>'Descrition')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Update Post!', array('class'=>'btn btn-primary')) !!}
		</div>

	{!! Form::close() !!}

</div>

@endsection

