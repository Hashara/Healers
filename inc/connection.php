<?php

    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='healerDb';


    $connection=mysqli_connect('localhost','root','','healerDb');
     
    if(mysqli_connect_errno())
        die(mysqli_connect_error());
   /* else
        echo "done";*/
?>
