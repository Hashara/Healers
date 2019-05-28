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
<img src="css/logo.jpg" alt="" width="auto" height="30px " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Account</a>
      </li>
            
    </ul>
    
  </div>
</nav>

<center>
<div class="container">
<h1 align="center" style="color:white;">Message </h1>

<div class="row">
  <div class="column">
    <div class="container">
        <div class="card">
        <h3><b>Contact Counselor</b></h3>
        <center><img src="css/newmsg.png" alt="message" width=200 height=auto ></center> 

          <p><input type="button" class="btn btn-primary" value="New Message" onclick="window.location.href='message.php'" /></p>
          
        </div>
    </div>
  </div>

  <div class="column">
    <div class="container">
    <div class="card">
    <h3><b>My Messages</b></h3>
        <center><img src="css/receive.png" alt="message" width=200 height=auto ></center> 

          <p><input type="button" class="btn btn-primary" value="View" onclick="window.location.href='message.php'" /></p>
          
        </div>
    </div>
  </div>

 
</div>
</center>
</body>
</html>
