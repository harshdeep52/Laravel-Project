<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <!-- <h1>{{$title}} This is Header Component </h1> -->


    
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <title>{{$title}}</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/users')}}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/blogs')}}">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/signup')}}">Signup</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<h3>Last Visited page : -  {{URL::previous()}}</h3>
</body>
</html>