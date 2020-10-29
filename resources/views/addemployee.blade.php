<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<title>Employee Form</title>
</head>
<body>
	<form method="post" action="{{ URL::to('store-employee') }}">
		{{ csrf_field() }}
		<div class="container">
		<div class="col-md-9 ">
			<div class="form-group">
				<label>Name:</label>
				<input class="form-control" type="text" name="name">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" type="email" name="email">
			</div>
			<div class="form-group">
				<label>Date of Birth:</label>
				<input class="form-control" type="date" name="date_of_birth">
			</div>
			<div class="form-group">
				<label>Salary:</label>
				<input class="form-control" type="number" name="salary">
			</div>
			<div class="form-group">
				<label>Gender:</label><br>
				<input type="radio" name="gender" value="male">Male <br>
				<input type="radio" name="gender" value="female">Female <br>
				<input type="radio" name="gender" value="others">Others <br>
			</div>
			<div class="form-group">
				<label>Status:</label><br>
				<input type="checkbox" name="status" value="permanate">Parmanante<br>
				<input type="checkbox" name="status" vlaue="active">Active <br>
				<input type="checkbox" name="status" value="Officer">Officer <br>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</div>
	</div>
	</form>
</body>
</html>