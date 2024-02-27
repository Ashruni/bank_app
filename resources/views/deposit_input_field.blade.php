<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DEPOSIT AMOUNT</h1>
<form action="{{route('depositing')}}" method="post">
        @csrf
      <input type="number" placeholder="Enter Account Number" name="ac_number"><br>
      <input type="number" placeholder="Enter the deposit amount" name="deposit"><br>

      <button type="submit">Login</button>
    </form>

</body>
</html>
