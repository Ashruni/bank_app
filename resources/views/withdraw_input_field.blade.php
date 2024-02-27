<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WITHDRAW AMOUNT</h1>
<form action="" method="post">
        @csrf
      <input type="number" placeholder="Enter Account Number" name="ac_number" required><br>
      <input type="number" placeholder="Enter the deposit amount" name="withdraw" required><br>

      <button type="submit">withdraw</button>
    </form>

</body>
</html>
