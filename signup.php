<?php 
    require_once('inc/connection.php');
?>
<?php

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
        $studentId=$_POST['stuentId'];
        $name=$_POST['name'];
        $batch=$_POST['batch'];
        $birtday=$_POST['birthday'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $faculty=$_POST['faculty'];
        $department=$_POST['department'];
        $erors=array();

        $studentId=mysqli_real_escape_string($connection,$_POST['stuentId']);
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
            $query="studentId,studentName,email,password,birthday,faculty,department,batch";
            $query=") VALUES (";
            $query="'{$studentId}','{$name}','{$email}','{$hashed_password}','{$birtday}','{$faculty}','{$department}','{$batch}'";
            
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
    <title>Sign up</title>
</head>
<body>
    <div align="justify">
    <form>
  <fieldset>
    <legend align="center">Sign Up</legend>
    <?php
        if(!empty($errors)){
            echo 'Error in you form';
        }
    ?>
    <div class="form-group" >
      <label for="">Student Id</label>
      <input type="text" name="stuentId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter index" required>
      
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
      
    </div>

    <div class="form-group">
      <label for="">Batch</label>
      <input type="text" name="batch" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter batch" required>
      
    </div>

    <div class="form-group">
      <label for="">Birthday</label>
      <input type="date" name="birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter birthdate" required>
      
    </div>

    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your university email" required>
      
    </div>
    <div class="form-group">
      <label for="e">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  required>
    </div>
    <div class="form-group">
      <label for="">Faculty</label>
      <select class="" name=faculty id="exampleSelect1" name= "Faculty"  required>
        <option>Faculty of Engineering</option>
        <option>Faculty of Architecture </option>
        <option>Faculty of Information Technology </option>
        <option>Faculty of Business</option>
        </select>
    </div>
    <div class="form-group">
      <label for="">Department</label>
      <input type="text" name="department" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your department">
      
    </div>
   
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

    </div>
</body>
</html>