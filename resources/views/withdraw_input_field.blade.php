<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WITHDRAW AMOUNT</h1>
<form action="{{route('withdrawing-amount-from-account')}}" method="post">
        @csrf
      <input type="number" value="{{$acNumb}}" placeholder="Enter Account Number" name="ac_number" readonly><br>
      <input type="number" placeholder="amount" name="withdraw" required min='200' max='20000'><br>

      <button type="submit">withdraw</button>
    </form>

</body>
</html>
