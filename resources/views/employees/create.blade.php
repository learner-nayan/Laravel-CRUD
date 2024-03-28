<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

@if (session('message'))
<div class="container">
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <p>{{{ session('message') }}}</p>
    </div>
</div>
@endif

<h3>Employee Form</h3>

<div>
  <form action="/employees/create" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <label for="name">Employee Name</label>
    <input type="text" id="name" name="name" placeholder="Employee name..">

    <label for="salary">Employee Salary</label>
    <input type="text" id="salary" name="salary" placeholder="Employee salary..">

    <label for="department">Employee Department</label>
    <select id="department" name="department">
      <option value="it">IT</option>
      <option value="software">Software</option>
      <option value="AI">AI</option>
      <option value="AI">Blockchain</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
