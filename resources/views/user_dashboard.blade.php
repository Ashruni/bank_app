<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:#5c1301;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  /* .body{
    background-color:#ebffe6;
  } */
  </style>
</head>
<body style="background-color:#f8fade;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{ucfirst(Auth()->user()->name)}}</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">PROFILE</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Reports</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container text-center">
  <!-- <h3></h3><br> -->
  <br><br><br>
  <div class="row">


    <div class="col-sm-4">
    <div class="well">

     <h4><a href="{{route('deposit_amount_input',ucfirst(Auth()->user()->id))}}">ADD DEPOSIT</a></h4>
</div>
    </div>


    <div class="col-sm-4">
      <div class="well">
       <h4><a href="{{route('user-withdrawing-amount',ucfirst(Auth()->user()->id))}}">WITHDRAW AMOUNT</h4></p>
      </div>
      <!-- <div class="col-sm-4">
      <div class="well">
       <h4><a href="">USERS REPORTS</h4></p>
      </div> -->
    </div>
  </div>
</div><br>



</body>
</html>
