<!-- app/views/members/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
</head>
<body>
<div class="container">

<h1>Edit Member {{ $member->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($member, array('action' => array('members.update', $member->id), 'method' => 'PATCH')) }}

	<div class="form-group">
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
	</div>

	<div>
		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the member!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
