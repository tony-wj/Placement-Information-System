@extends ('app')

@section('content')

<div class='container'>

	{!! Form::model($info, array('route'=>array('info.update',$info->id),'method'=>'PUT','class'=>'form')) !!}
				
	<h2>Update Personal Infomation: {{ $info->name }}</h2>

		<div class='form-group'>
			{!! Form::label('Name') !!}
			{!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Name'))!!}
		</div>

		<div class="form-group">
			{!! Form::label('Category') !!}
			{!! Form::select('type_id', $infotype, null, array('class' =>'form-control')) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('Description') !!}
			{!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder'=>'Description'))!!}
		</div>


		<div class="form-group">
			{!! Form::submit('Update Info!', array('class'=>'btn btn-primary')) !!}
		</div>

	{!! Form::close() !!}

</div>

@endsection

