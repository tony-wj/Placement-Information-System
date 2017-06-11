@extends ('app')

@section('content')

<div class='container'>

	<h2>{{ App\InfoType::find($info->type_id)->name }}</h2>

		<div>
			<p>Name: {{ $info->name }}</p>
			<p>Own By: {{ App\User::find($info->user_id)->username }}</p>
			<p>Description: {{ $info->description }}</p>
			<p>
			{!! Html::linkRoute('info.edit','Edit', $info->id, array('class'=>'btn btn-default')) !!}
			{!! Html::linkRoute('info.index','Back',$info->id,array('class'=>'btn btn-default')) !!}
			</p>
		</div>

		
</div>

@endsection
