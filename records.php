<?php

include("connection.php");

class Records{

  function displayRecords($dbhost,$dbuser,$dbpass){

    //connect to server
        $connectionClass= new Connection();
        $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);

//fetch all data from table(all columns,all records)
   $sql = 'SELECT records FROM records WHERE studentID="170007T"';
   mysqli_select_db($connection,'project');
   $retval = mysqli_query( $connection,$sql );

   if(! $retval ) {
      die('Could not get data: ' );
   }

//display all data
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "{$row['records']}  <br> ";
   }



   mysqli_close($connection);
 }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$record_class = new Records();
$record_class->displayRecords($dbhost,$dbuser,$dbpass);

?>
