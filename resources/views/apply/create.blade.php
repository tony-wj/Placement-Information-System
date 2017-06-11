@extends ('app')

@section('content')

<div class='container'>

	{!! Form::open(array('route' => 'apply.store','class' => 'form'))!!}

		<div class='form-group'>
			{!! Form::label('Select Job You Want To apply:')!!}
			{!! Form::select('post_id', $post, null, array('class' =>'form-control')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Your CV:')!!}
			{!! Form::textarea('resume', null, array('required', 'class'=>'form-control','placeholder'=>'Resume')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Your Cover Letter:')!!}
			{!! Form::textarea('cover_letter', null, array('required', 'class'=>'form-control','placeholder'=>'Cover Letter')) !!}
		</div>


		<div class='form-group'>
			{!! Form::submit('Submit!', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
</div>

@endsection
