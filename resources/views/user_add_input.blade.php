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
      <input type="text" placeholder="Enter Username" name="name" required><br>
      <input type="password" placeholder="Enter Password" name="password" required><br>
      <input type="email" placeholder="Enter Email" name="email" required><br>
      <input type="tel" placeholder="Enter Mobile" name="mobile" pattern="^[789]\d{9}$" required><br>
      <input type="text" placeholder="Enter Ac number" name="account_number"    required><br>
      <input type="text" placeholder="Address" name="address" required><br>
      <button type="submit">submit</button>
    </form>
  </div>
</div>

</body>
</html>
