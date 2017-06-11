@extends ('app')

@section('content')
<div class='container'>

{!! Form::open(array('url' => 'posts/search','method' => 'GET'))!!}

		<div class='form-group'>
			{!! Form::text('keyword', null, array('required', 'class'=>'form-control','placeholder'=>'Search...')) !!}
		</div>


		<div class='form-group'>
			{!! Form::submit('Search!', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}


<table class="table">
		<thead>
			<th>Job Title</th>
			<th>Post By</th>
			<th>Job Type</th>
			<th>Location</th>
			<th>Vacancy</th>
			<th>Salary</th>
			<th colspan="3">Action</th>
		</thead>
		<tbody>
			@foreach ($posts as $post)
			<tr>
				<td>{!! Html::linkRoute('posts.show', $post->name, $post->id) !!}</td>

				<td>{{ App\User::find($post->post_by)->username }}</td>
				<td>{{ App\JobType::find($post->job_type)->type }} </td>

				<td>{{ $post->location }} </td>
				<td>{{ $post->vacancy }} </td>
				<td>{{ $post->salary }} </td>
				<td>
					{!! Html::linkRoute('apply.create','Apply', $post->id, array('class'=>'btn btn-default')) !!}
				</td>
				<td>
					{!! Html::linkRoute('posts.edit','Edit', $post->id, array('class'=>'btn btn-default')) !!}
				</td>
				<td>
					{!! Form::open(array('route'=>array('posts.destroy',$post->id), 'method'=>'delete')) !!}
						{!! Form::submit('Delete', array('class'=>'btn btn-default')) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@endsection