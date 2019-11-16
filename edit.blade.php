<!DOCTYPE html>
<html>
<head>
	<title>Editing Student</title>
</head>
<body>
	<form role="form" method="POST" action="/saveStudentAfterEditing/{{$student->id}}">
                {{csrf_field()}}
<label>Name
<input type="text" name="studentName" value="{{$student->name}}"></label>
<button type="submit" class="btn btn-primary">
                    Save
                </button>
</form>
</body>
</html>