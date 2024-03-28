<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@if ($errors->any())
<div class="container">
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error ) 
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
</div>
@endif

<div class="container">
  <h2>Company Edit</h2>
  <form action="{{route('companies.update', [$company->id])}}" method="post">
    @method('put')
  <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
  @csrf

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" value="{{old('name', $company->name)}}" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" value="{{old('address', $company->address)}}" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="form-group">
      <label for="est_date">Established date:</label>
      <input type="date" value="{{old('est_date', $company->est_date)}}" class="form-control" id="est_date" placeholder="Enter password" name="est_date">
    </div>
    <select name="type" id="type">
        <option {{$company->type=='IT'?'selected':''}}>IT</option>
        <option {{$company->type=='Software'?'selected':''}}>Software</option>
        <option {{$company->type=='Finance'?'selected':''}}>Finance</option>
    </select>
    <div class="checkbox">
      <label><input type="checkbox" name="status" {{$company->status?'checked':''}}> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
