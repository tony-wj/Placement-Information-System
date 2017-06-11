@extends ('app')

@section('content')
<div class='container'>

<table class="table">
		<thead>
			<th>User Name</th>
			<th>User Type</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Mobile</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
			@foreach ($profiles as $profile)
			<tr>
				<td>{!! Html::linkRoute('profile.show', $profile->username, $profile->id) !!}</td>
				@if ($profile->user_type != NULL)
				<td>{{ App\UserType::find($profile->user_type)->name  }}</td>
				@else
				<td>{{ 'NULL'  }}</td>
				@endif
				<td>{{ $profile->firstName }}&nbsp;{{ $profile->lastName }} </td>
				<td>{{ $profile->email }} </td>
				<td>{{ $profile->gender }} </td>
				<td>{{ $profile->mobile }} </td>
				<td>
					{!! Html::linkRoute('profile.edit','Edit', $profile->id, array('class'=>'btn btn-default')) !!}
				</td>
				<td>
					{!! Form::open(array('route'=>array('profile.destroy',$profile->id), 'method'=>'delete')) !!}
						{!! Form::submit('Delete', array('class'=>'btn btn-default')) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@endsection