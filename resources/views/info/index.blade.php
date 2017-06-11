@extends ('app')

@section('content')
<div class='container'>
{!! Form::open(array('url' => 'info/search','method' => 'GET'))!!}

		<div class='form-group'>
			{!! Form::text('keyword', null, array('required', 'class'=>'form-control','placeholder'=>'Search...')) !!}
		</div>


		<div class='form-group'>
			{!! Form::submit('Search!', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}

<table class="table">
		<thead>
			<th>Category</th>
			<th>Name</th>
			<th>Owned by</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
			@foreach ($info as $info)
			<tr>
				<td>{{ App\InfoType::find($info->type_id)->name }}</td>
				<td>{!! Html::linkRoute('info.show', $info->name, $info->id) !!}</td>
				<td>{{ App\User::find($info->user_id)->username }}</td>

				
				<td>
					{!! Html::linkRoute('info.edit','Edit', $info->id, array('class'=>'btn btn-default')) !!}
				</td>
				<td>
					{!! Form::open(array('route'=>array('info.destroy',$info->id), 'method'=>'delete')) !!}
						{!! Form::submit('Delete', array('class'=>'btn btn-default')) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@endsection