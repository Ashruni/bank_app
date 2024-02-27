<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:350px;
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
}
h3{
    margin-left:350px;
}
body{
    background-color:#e6ffe6;
}
</style>
</head>
<body>

<h2>Transaction History </h2>
<h3>NAME :{{$user->name}}<br>
Ac/No :{{$user->account_number}}</h3>
<table>

  <tr>
    <th>Date</th>
    <th>Deposits</th>
    <th>Withdraw</th>
  </tr>

  @foreach($transactionHistory as $transaction)
  <tr>
    <td>{{$transaction->created_at}}</td>
    <td>{{$transaction->deposits}}</td>
    <td>{{$transaction->withdraw}}</td>
  </tr>
  @endforeach
  <tr>
    <th><strong>Current Balance</strong></th>
    <td><strong>{{$currentBalance}}</strong></td>
  </tr>

</table>

</body>
</html>

