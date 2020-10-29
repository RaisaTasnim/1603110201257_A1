<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>Employee Table</title>
</head>
<body>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Date of Birth</th>
					<th>Salary</th>
					<th>Gender</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($employee as $u)
				<tr>
					<td>{{ $u->name }}</td>
					<td>{{ $u->email }}</td>
					<td>{{ $u->date_of_birth }}</td>
					<td>{{ $u->salary }}</td>
					<td>{{ $u->gender }}</td>
					<td>{{ $u->status }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>