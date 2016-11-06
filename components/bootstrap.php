<html>
<head>
	<title>MY JOB</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
</head>
<body>
	<hr>
	<form class = "form-horizontal">
		<div class = "form-group">
			<label for = "name" class = "col-sm-3 control-label">Name</label>
			<div class = "col-sm-6">
				<input type = "text" class = "form-control" placeholder = "Name" id = "name">
			</div>
		</div>
		<div class = "form-group">
			<label for = "email" class = "col-sm-3 control-label">Email</label>
			<div class = "col-sm-6">
				<input type = "email" class = "form-control" placeholder = "Email" id = "email">
			</div>
		</div>
		<div class = "form-group">
			<label for = "comment" class = "col-sm-3 control-label">Comment</label>
			<div class = "col-sm-6">
				<textarea class = "form-control" id = "comment" placeholder = "Write your comment here"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-5 col-xs-6">
				<button type="submit" class="btn btn-success">Send</button>
			</div>
			<div class="col-sm-4 col-xs-6">
				<button type="submit" class="btn btn-success">Preview</button>
			</div>
		</div>
	</form>
</body>
</html>