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

      <input type="number" placeholder="Enter Account Number" name="ac_number" value="{{$acNum}}" readonly><br>
      <input type="number" placeholder=" amount" name="deposit" min='200' max='20000'><br>

      <button type="submit">Deposit</button>
    </form>

</body>
</html>
