<?php 
    require_once('inc/connection.php');
?>
<?php
    
    //submission?
    if (isset($_POST['submit'])){
        $errors=array();

        //username and password entered?
        if(!isset($_POST['studentId']) || strlen(trim($_POST['studentId']))<1){
            $errors[]="Student ID is missing/Invalid";
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $errors[]="password is missing/Invalid";
        }
 
        //any errors?
        if(empty($errors)){
            //save username and password for variables
            $studentId=mysqli_real_escape_string($connection,$_POST['studentId']);
            $password=mysqli_real_escape_string($connection,$_POST['password']);
            $hashed_password=md5($password);

            //prepare database query
            $query= "SELECT * FROM studentdetails 
             WHERE studentId='{$studentId}' 
             AND password='{$hashed_password}' 
            LIMIT 1";
            
            $result_set=mysqli_query($connection,$query);
            //valid?
            if($result_set){
                //query sucess
                
                if(mysqli_num_rows($result_set)==1){
                    //vaild user found
                    header('Location:login_success.php');//rederecting student.php page
                }else{
                    //username or password invaild
                    $errors[]="invaild username or password";
                }

            }else{
                $errors[]="Database query failed";
                //if not desplay error
            }
            


            
        }
    }
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.min.css">
    <link rel="stylesheet" href="css/login.css">
   
    
    <title>LogIn-Helares</title>
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
    <div class="container">
        <form action="" method="post" >
        
          <center> 
           
           
            <div class="row"> 
            <div class="column">
                <div class="card">
                    <p><br></p>
                <legend><h1><b>Log in</b></h1></legend>
                <img src="icons/login.png" alt="login" width=200 height=auto>
                <?php 
                    if (isset($errors) && !empty($errors)){
                        echo '<pre class="alert-danger hr">
                        <p align="center">Invalid Username/password <p>
                         </pre>';
                    }
                ?>
                 <div class="container">
                <p for="">Addmission number :</p>
                <input type="text" name="studentId" id="" placeholder="student Id" class="form-control"> 
                
                <p for="">Password :</p>
                <input type="password" name="password" id="" placeholder="Password" class="form-control">
                <p><button type="submit" name="submit" class="btn btn-primary">LogIn</button></p>
                </div>
                </div>
            </div>   
            </div>   
            </center>
        </form>
    </div> <!--.login-->

</body>
</html>

