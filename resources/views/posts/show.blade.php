@extends ('app')

@section('content')

<div class='container'>

	<h2>{{ $post->name }}</h2>

		<div>
			<p>Created on: {{ $post->created_at }}</p>
			<p>Last modified: {{ $post->updated_at }}</p>
			<p>Posted By: {{ App\User::find($post->post_by)->username }}</p>
			<p>Job Type: {{ App\JobType::find($post->job_type)->type }}
			<p>Start Time: {{ $post->startTime }}</p>
			<p>End Time: {{ $post->endTime }}</p>
			<p>Location: {{ $post->location }}</p>
			<p>Vacancy: {{ $post->vacancy}}</p>
			<p>Monthly Salary: {{ $post->salary }}</p>
			<p>Description: {{ $post->description }}</p>
			<p>
			{!! Html::linkRoute('posts.edit','Edit', $post->id, array('class'=>'btn btn-default')) !!}
			{!! Html::linkRoute('posts.index','Back',$post->id,array('class'=>'btn btn-default')) !!}
			</p>
		</div>

		
</div>

@endsection
