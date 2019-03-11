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
    
    <link rel="stylesheet" href="css/login.css">
    <title>LogIn-Helares</title>
</head>
<body style = "background: url(http://www.kodul.cat/look/full/88/883812/universe-hd-wallpapers-1080p.jpg); background-size: 100%;">
    <div class="login">
        <form action="" method="post" >
        
          <center> 
           
           
            <div class="row"> 
            <div class="colunm">
                <div class="card">
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
                <input type="text" name="studentId" id="" placeholder="student Id"> 
                
                <p for="">Password :</p>
                <input type="password" name="password" id="" placeholder="Password">
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

