<html>
<head>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/_variables.scss">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/_bootswatch.scss">
</head>
</html>

<?php

include("connection.php");

class Tasks{

  function displayTasks($dbhost,$dbuser,$dbpass){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);



//fetch all data from the table
   $sql = 'SELECT tasks,task_id FROM tasks WHERE studentID="170007T"';
   mysqli_select_db($connection,'project');
   $retval = mysqli_query( $connection,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

//display all data

   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "{$row['tasks']}

        <form action='update_tasks.php'  method='post'>
          <button type='submit' class='btn btn-primary btn-sm' formtarget='_self' formmethod='post' name='done_button'  value='{$row['task_id']}' />
          DONE
          </button>
        </form>

      <br> ";

   }
   mysqli_close($connection);

 }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$task_class = new Tasks();
$task_class->displayTasks($dbhost,$dbuser,$dbpass);


?>
