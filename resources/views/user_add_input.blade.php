<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="topnav">
    <h1>ADD A NEW USER</h2>
  <!-- <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a> -->
  <div class="login-container">
    <form action="{{route('adding_new_user')}}" method="post">
        @csrf
      <input type="text" placeholder="Enter Username" name="name"><br>
      <input type="password" placeholder="Enter Password" name="password"><br>
      <input type="email" placeholder="Enter Email" name="email"><br>
      <input type="number" placeholder="Enter Mobile" name="mobile"><br>
      <input type="number" placeholder="Enter Ac number" name="account_number"><br>
      <input type="text" placeholder="Address" name="address"><br>
      <button type="submit">Login</button>
    </form>
  </div>
</div>

</body>
</html>
