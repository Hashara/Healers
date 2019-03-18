<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/index.min.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<ul class="slideshow">
  <li><span>Image 01</span></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img src="icons/logo.jpg" alt="" width="auto" height="30px " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="container">
<h1 align="center" style="color:white;">Healers</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><b>Already have an account?</b></h3>
      
      <img align="center" src="icons/login.png" alt="login" width=40% height="auto">
      
      <p><input type="button" class="btn btn-primary" value="Log In" onclick="window.location.href='login.php'" /></p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><b>Sign up Today</b> </h3>
      <img src="icons/signup.png" alt="signup" width=40% height="auto">
      
      <p><input type="button" class="btn btn-primary" value="Sign Up" onclick="window.location.href='signup.php'" /></p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><b>Want to help someone?</b></h3>
      <img src="icons/view.png" alt="visit" width=40% height="auto">
      
      <p><input type="button" class="btn btn-primary" value="Visit" onclick="window.location.href='visit.php'" /></p>
     
    </div>
  </div>
  </div>
 
</div>
</body>
</html>
