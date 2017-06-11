@extends ('app')

@section('content')
<div class='container'>

<table class="table">
		<thead>
			<th>User Name</th>
			<th>Job</th>
			<th>Status</th>
			<th colspan="3">Action</th>
		</thead>
		<tbody>
			@foreach ($applys as $apply)
			@if ($apply->user_id == Auth::user()->id)
			<tr>
				<td>{!! App\User::find($apply->user_id)->username !!}</td>
				<td>{!! App\Post::find($apply->post_id)->name !!}</td>
				<td>{{ App\ApplicationStatus::find($apply->status_id)->status }}</td>

				
				<td>{!! Html::linkRoute('apply.show','View', $apply->id,array('class'=>'btn btn-default')) !!}</td>
				<td>
					{!! Html::linkRoute('apply.edit','Edit', $apply->id, array('class'=>'btn btn-default')) !!}
				</td>
				<td>
					{!! Form::open(array('route'=>array('apply.destroy',$apply->id), 'method'=>'delete')) !!}
						{!! Form::submit('Delete', array('class'=>'btn btn-default')) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>

</div>
@endsection