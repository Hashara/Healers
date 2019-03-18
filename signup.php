<?php session_start(); ?>
<?php  require_once('inc/connection.php');?>
<?php require_once('inc/function.php');?>
<?php
    $errors = array();
    $studentId='';
    $name='';
    $batch='';
    $birtday='';
    $email='';
    $password='';
    $faculty='';
    $department='';
    
    //submitted?
    if (isset($_POST['submit'])){
        //checking req
        $req_fields=array('studentId','name','batch','birthday','password','email','faculty');

        $errors=array_merge($errors, check_required_fields($req_fields));
        
        $studentId=$_POST['studentId'];
        $name=$_POST['name'];
        $batch=$_POST['batch'];
        $birtday=$_POST['birthday'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $faculty=$_POST['faculty'];
        $department=$_POST['department'];
        $studentId=mysqli_real_escape_string($connection,$_POST['studentId']);
        $query="SELECT * FROM studentdetails WHERE studentId='{$studentId}' LIMIT 1";
       
        $result_set=mysqli_query($connection,$query);
        if($result_set){
            if(mysqli_num_rows($result_set)==1){
                $errors[]='student id already exists';
            }
        }
        if(empty($errors)){
            $name=mysqli_real_escape_string($connection,$_POST['name']);
            $batch=mysqli_real_escape_string($connection,$_POST['batch']);
            $birtday=mysqli_real_escape_string($connection,$_POST['birthday']);
            $email=mysqli_real_escape_string($connection,$_POST['email']);
            $password=mysqli_real_escape_string($connection,$_POST['password']);
            $faculty=mysqli_real_escape_string($connection,$_POST['faculty']);
            $department=mysqli_real_escape_string($connection,$_POST['department']);
            $hashed_password=md5($password);
            $query="INSERT INTO studentdetails (";
            $query.="studentId,studentName,email,password,birthday,faculty,Department,batch";
            $query.=") VALUES (";
            $query.="'{$studentId}','{$name}','{$email}','{$hashed_password}','{$birtday}','{$faculty}','{$department}','{$batch}')";
            
            $result=mysqli_query($connection,$query);
            if($result){
                //success
                header('Location:signup_success.php');
                
            }else{
                $erors[]='failed to add';
                
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/_bootswatch.scss">
    <link rel="stylesheet" href="css/_variables.scss">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Sign up</title>
</head>
<body >

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
<p><br></p>
    <form action="" method="post">
      <center>
    
    <div class="card" >

    <legend ><b>Sign Up</b></legend>

    <?php
        if(!empty($errors)){
          echo '<div class="alert-danger hr">';
          echo '<b>There were error(s) on your form.</b><br>';
          foreach ($errors as $error) {
            echo '- ' . $error . '<br>';
          }
          echo '</div>';
        }
    ?>
    <div class="form-group" >
      <label for="">Student Id</label>
      <input type="text" name="studentId" class="form-control" id="studentId" aria-describedby="emailHelp" placeholder="Enter index">
      
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" id="signup" aria-describedby="emailHelp" placeholder="Enter name" >
      
    </div>

    <div class="form-group">
      <label for="">Batch</label>
      <input type="text" name="batch" class="form-control" id="signup" aria-describedby="emailHelp" placeholder="Enter batch" >
      
    </div>

    <div class="form-group">
      <label for="">Birthday</label>
      <input type="date" name="birthday" class="form-control" id="signup" aria-describedby="emailHelp" placeholder="Enter birthdate" >
      
    </div>

    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" name="email" class="form-control" id="signup" aria-describedby="emailHelp" placeholder="Enter your university email" >
      
    </div>
    <div class="form-group">
      <label for="e">Password</label>
      <input type="password" name="password" class="form-control" id="signup" placeholder="Password"  >
    </div>
    <div class="form-group">
      <label for="">Faculty</label>
      <select class="form-control" name=faculty id="signup"  >
        <option>Faculty of Engineering</option>
        <option>Faculty of Architecture </option>
        <option>Faculty of Information Technology </option>
        <option>Faculty of Business</option>
        </select>
    </div>
    <div class="form-group">
      <label for="">Department</label>
      <input type="text" name="department" class="form-control" id="signup" aria-describedby="emailHelp" placeholder="Enter your department">
      
    </div>
   
    
    <p><button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
  
  </div>
  </center>
      
</form>

    
</body>
</html>