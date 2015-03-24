<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
</head>
<body>
<div class="container">

<h1>All Members</h1>

<a href="{{ URL::to('members/create') }}">Create</a>

@if ($members->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
		        <th>Last Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($members as $member)
                <tr>
                	<td>{{ $member->id }}</td>
                 	<td>{{ $member->first_name }}</td>
		         	<td>{{ $member->last_name }}</td>
					<td>
						<a href="{{ URL::to('members/' . $member->id . '/edit') }}">Edit</a>
					</td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@endif
</div>
</body>
</html>