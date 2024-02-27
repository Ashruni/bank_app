<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <th>Name</th>
    <th>Email</th>
    <th>Account Number</th>
    <th>Password</th>
    <th>Mobile</th>
    <th>Address</th>


@foreach($results as $result)

  <tr>

    <td>{{$result->name}}</td>
    <td>{{$result->email}}</td>
    <td>{{$result->account_number}}</td>
    <td>{{$result->password}}</td>
    <td>{{$result->mobile}}</td>
    <td>{{$result->address}}</td>


  </tr>
  @endforeach

</table>

</body>
</html>

