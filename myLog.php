<?php
include("connection.php");

class MyLog{

  function displayLog($dbhost,$dbuser,$dbpass){

//connect to server
    $connectionClass= new Connection();
    $connection = $connectionClass -> callConnection($dbhost,$dbuser,$dbpass);


//fetch data from table
$sql = 'SELECT * FROM student_data WHERE studentID="170007T"';
mysqli_select_db($connection,'project');
$retval = mysqli_query( $connection,$sql );

if(! $retval ) {
   die('Could not get data: ' );
}

//display data
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
   echo
      " NAME : {$row['Name']} <br> ".
      "AGE : {$row['Age']} <br> ".
      "FACULTY : {$row['Faculty']} <br>".
      "DEPARTMENT : {$row['Department']} <br>".
      "YEAR : {$row['Year']} <br>".
      "EMAIL : {$row['email']} <br>";


}



mysqli_close($connection);

}
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$log_class = new MyLog();
$log_class->displayLog($dbhost,$dbuser,$dbpass);
?>
