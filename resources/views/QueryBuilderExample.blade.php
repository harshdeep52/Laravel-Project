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
  <h2>Query Builder</h2>

  <form action="addnewMember" method="POST">
    @csrf
    <div class="mb-2 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" id="city" autocomplete="off"  placeholder="Enter City" name="city">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>

  <table class="table table-bordered table-condensed">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
        <th>Action</th>
    </tr>

    @foreach($membersList as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->city}}</td>
            <td>
              <a  href={{"editQueryBuilderRecord/".$member->id}} class="btn btn-sm btn-info">Edit</a>
              <a  href={{"deleteQueryBuilderRecord/".$member->id}} class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
  </table>