<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.sample-form{
			background: #f00;
			margin-top: 50px;
			border-radius: 10px;
			padding: 15px;
		}
		.form-group{
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<form class="sample-form">
				<div class="row">
					<a><span class="" style="color: #000;"></span></a>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3 form-group">
						<input type="text" name="first">
					</div>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3 form-group">
						<input type="date" name="date"/>
					</div>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3 form-group">
						<input type="text" name="first">
					</div>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3 form-group">
						<input type="date" name="date"/>
					</div>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3  form-group">
						<input type="text" name="first">
					</div>
					<div class="col-lg-3 form-group">
						<label>Name:</label>
					</div>
					<div class="col-lg-3 form-group">
						<input type="date" name="date"/>
					</div>
				</div>
			</form>
			<div class="col-lg-6">
				<form action="insert.php" method="POST">
				<b>Name:</b>
				<b>DoB:</b>
				<input type="submit" name="save"/>
		</form>
		</div>
		<div class="col-lg-7">
				<form action="insert.php" method="POST">
			<b>Name:</b><input type="text" name="first">
			<b>DoB:</b><input type="date" name="date"/>
			<input type="submit" name="save">
	</form>
		</div>
		</div>
		
	</div>
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>