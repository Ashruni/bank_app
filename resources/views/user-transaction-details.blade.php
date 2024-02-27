<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:320px;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
    margin-left:500px;
    margin-top:60px;
}
body{
    background-color:#e6fff2;
}
h3{
    margin-left:320px;
}
</style>

</head>
<body>

<h1>Transaction Details</h1>
<h3><strong>NAME: {{$details->name}}<BR>
AC/No : {{$details->account_number}}</strong></h3>


<table>
  <tr>


    <th>Dates</th>
    <th>Deposits</th>
    <th>Withdrew</th>
  </tr>
  @foreach($accountDetails as $accountDetail)
  <tr>


    <td>{{$accountDetail->created_at}}</td>
    <td>{{$accountDetail->deposits}}</td>
    <td>{{$accountDetail->withdraw}}</td>

  </tr>
  @endforeach

  <tr>
    <th>Current Balance</th>
    <td><strong>{{$currentBalance}}<strong></td></tr>



</table>

</body>
</html>
