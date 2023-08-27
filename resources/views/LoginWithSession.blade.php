<x-header componentName="LoginWithSession" />
<!-- <h2>This is LoginWithSession</h2> -->
<Br>
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
  <h2>Login With DB With Session Example</h2>
  <br />
   <form action="loginCheck" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-3 input-sm">
          <label for="email">User name:</label>
          <input type="text" class="form-control" id="user" autocomplete="off" placeholder="Enter User Name" name="user">
        </div>
       
        <div class="col-md-3">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" autocomplete="off"  placeholder="Enter password" name="pswd">
        </div>
        <div class="col-md-3">
            <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

  </form>
</div>

</body>
</html>