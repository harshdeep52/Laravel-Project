<x-header componentName="Members" />

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
  <h2>Members List</h2>
    <table class="table table-bordered table-condensed">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
            </tr>
        @foreach($membersList as $member)
            <tr>
                <td>{{$member['id']}}</td>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['city']}}</td>
            </tr> 
        @endforeach       
    </table>
</div>

</body>
</html>


