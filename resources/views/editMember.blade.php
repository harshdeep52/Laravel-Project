<x-header componentName="Members" />
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .w-5{
        display: none;
    }
</style>
<body>

<div class="container mt-3">
  <h2>Edit Member</h2>
    <Br/>

  @if(Session::has('userUpdate'))
  <h4 class="alert-success">{{Session('userUpdate')}}</h4>
  @endif

<form action="/updateMemberData" method="POST">
    <!-- membersData -->
    @csrf
    <input type="hidden" name="id" value="{{$membersData->id}}">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Enter email" name="name" value="{{$membersData->name}}">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Enter email" name="email" value="{{$membersData->email}}">
    </div>
    <div class="mb-3">
      <label for="pwd">name:</label>
      <input type="text" class="form-control" id="city" autocomplete="off"  placeholder="Enter password" name="city" value="{{$membersData->city}}">
    </div> 
    <button type="submit" class="btn btn-primary">Update</button>
</form>