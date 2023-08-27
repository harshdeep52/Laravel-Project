<h4>Api data  Will diplay  here </h4>


<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Pic</th>
    </tr>

@foreach($apidata as $data)
<tr>
    <td>{{$data['id']}}</td>
    <td>{{$data['first_name']}}</td>
    <td>{{$data['email']}}</td>
    <td><img src={{$data['avatar']}} alt="Profile Pic" ></td>
</tr>
@endforeach
</table>