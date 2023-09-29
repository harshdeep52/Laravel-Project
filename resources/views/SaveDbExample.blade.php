<x-header componentName="SaveDataInDb" />


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  @if(Session::has('userAdded'))
  <h4 class="alert-success">{{Session('userAdded')}}</h4>
  @endif

  <form action="saveuserdata" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" autocomplete="off"  placeholder="Enter password" name="password">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Age:</label>
      <input type="number" class="form-control" id="age" autocomplete="off" placeholder="Enter Age" name="age">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="address" autocomplete="off" placeholder="Enter Address" name="address">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
