<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-color:#e6ffee;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:350px;
  margin-top:20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2{
    margin-left:550px;
    margin-top:30px;
}
</style>
</head>
<body>

<h2>Current Balance</h2>

<table>
  <tr>

    <th>Name</th>
    <th>Account Number</th>

    <th><strong>Current Balance</strong></th>
  </tr>
  <tr>

    <td>{{$aboutUser->name}}</td>
    <td>{{$aboutUser->account_number}}</td>

    <td><strong>{{$currentBalance}}</strong></td>
  </tr>

</table>

</body>
</html>

