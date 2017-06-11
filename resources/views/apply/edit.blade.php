@extends ('app')

@section('content')

<div class='container'>

	{!! Form::model($applyinfo, array('route'=>array('apply.update',$apply->id),'method'=>'PUT','class'=>'form')) !!}
				
	<h2>Update Application</h2>

		<div class='form-group'>
			{!! Form::label('Resume') !!}
			{!! Form::textarea('resume', null, array('required', 'class'=>'form-control', 'placeholder'=>'Resume'))!!}
		</div>

		<div class='form-group'>
			{!! Form::label('Cover Letter') !!}
			{!! Form::textarea('cover_letter', null, array('required', 'class'=>'form-control', 'placeholder'=>'Cover Letter'))!!}
		</div>


		<div class="form-group">
			{!! Form::submit('Update Application!', array('class'=>'btn btn-primary')) !!}
		</div>

	{!! Form::close() !!}

</div>

@endsection

