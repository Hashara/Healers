<?php

include("connection.php");

class Comments{

  function displayComments($dbhost,$dbuser,$dbpass){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);


//fetch all data from table(all columns,all records)
   $sql = 'SELECT comments FROM comments WHERE studentID="170007T"';
   mysqli_select_db($connection,'project');
   $retval = mysqli_query( $connection,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

//display all data
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "{$row['comments']}  <br> ";
   }



   mysqli_close($connection);
 }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$com_class = new Comments();
$com_class->displayComments($dbhost,$dbuser,$dbpass);

?>
