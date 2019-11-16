<!DOCTYPE html>
<html>
<head>
	<title>Adding Student</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<form role="form" method="POST" action="/saveStudent">
                {{csrf_field()}}
<label>Name
<input type="text" name="studentName"></label>
<button type="submit" class="btn btn-primary">
                    Save
                </button>
</form>



</body>
</html>