<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
</head>
<body>
<div class="container">

<h1>Create a Member</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'members')) }}

	<div class="form-group">
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create Member', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>