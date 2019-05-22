<?php

class Connection{

function callConnection($dbhost,$dbuser,$dbpass){

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

  if(! $conn ) {
    die('Could not connect: ' );

}

  return $conn;
}
}
?>
