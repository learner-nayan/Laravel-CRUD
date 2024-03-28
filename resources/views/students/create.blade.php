<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@if (session('message'))
<div class="container">
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <p>{{{ session('message') }}}</p>
    </div>
</div>
@endif

<div class="container">
  <h2>Student Create Form</h2>
  <form action="/students/create" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="roll_no">Roll no:</label>
      <input type="number" class="form-control" id="roll_no" placeholder="Enter email" name="roll_no">
    </div>
    <div class="form-group">
      <label for="pwd">GPA:</label>
      <input type="text" class="form-control" id="gpa" placeholder="Enter GPA" name="gpa">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="status"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>