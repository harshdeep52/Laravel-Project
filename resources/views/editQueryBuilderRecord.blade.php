<x-header componentName="QueryBuilderExample" />

<!-- <h4>Hello From Members Controller</h4> -->
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
  <h2>Edit Query Builder</h2>

  <form action="/memberInfoUpdate" method="POST">
    @csrf
    <!-- @foreach($memberdata as $member) -->
    <div class="mb-2 mt-3">
        <input type="hidden" name="id" value="{{$memberdata[0]->id}}">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Enter Name" name="name" value="{{$memberdata[0]->name}}">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Enter email" name="email" value="{{$memberdata[0]->email}}">
    </div>
    <div class="mb-3">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="city" autocomplete="off"  placeholder="Enter City" name="city" value="{{$memberdata[0]->city}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
   <!-- @endforeach  -->
  </form>
