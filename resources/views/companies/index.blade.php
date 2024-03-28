<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

@if (session('message'))
<div class="container">
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <p>{{{ session('message') }}}</p>
    </div>
</div>
@endif

<h1>A Fancy Table</h1>
<a href="{{route('companies.create')}}">Create Data</a>

<table id="customers">
  <tr>
    <th>Company</th>
    <th>Address</th>
    <th>Est. Date</th>
    <th>Type</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($companies as $company)
  <tr>
    <td>{{$company->name}}</td>
    <td>{{$company->address}}</td>
    <td>{{$company->est_date}}</td>
    <td>{{$company->type}}</td>
  <td><a href="{{route('companies.edit', [$company->id])}}">Edit</a></td>
  <form action="{{route('companies.delete', [$company->id])}}" method="post">
    @method('delete')
    @csrf
      <td><button type="submit" class="btn btn-default">Delete</button></td>
  </form>
  </tr>
  @endforeach
</table>

</body>
</html>