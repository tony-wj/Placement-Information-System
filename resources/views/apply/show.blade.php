@extends ('app')

@section('content')

<div class='container'>

	<h2>{{ 'Application' }}</h2>

		<div>
			<p>Name: {{ App\Post::find($apply->post_id)->name }}</p>
			<p>Own By: {{ App\User::find($apply->user_id)->username }}</p>
			<p>Submit Time: {{ $apply->created_at}}</p>
			<p>Update Time: {{ $apply->updated_at}}</p>
			<p>Status: {{ App\ApplicationStatus::find($apply->status_id)->status }}</p>
			<p>
			{!! Html::linkRoute('apply.edit','Edit', $apply->id, array('class'=>'btn btn-default')) !!}
			{!! Html::linkRoute('apply.index','Back',$apply->id,array('class'=>'btn btn-default')) !!}
			</p>
		</div>

		
</div>

@endsection
