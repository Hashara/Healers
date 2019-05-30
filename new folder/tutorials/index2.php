<!DOCTIPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet\_bootswatch.SCSS">
    <link rel="stylesheet" href="stylesheet\_variables.SCSS">
    <link rel="stylesheet" href="stylesheet\bootstrap.CSS">
    <link rel="stylesheet" href="stylesheet\bootstrao.min.CSS">
    <link rel="stylesheet" href="stylesheet\style.CSS">
<style>
       
        img {
            margin-top:7vh;
            border-style: double;
        }
        /* unvisited link */
a:link {
  color: black;
}

/* visited link */
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: black;
}

/* selected link */
a:active {
  color: black;
}

    
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Healers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
    </ul>
    
  </div>
</nav>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Healersdb";
require "connection.php";
$connect = new Connection($servername,$username,$password,$dbname );
$conn = $connect -> callConnection($servername,$username,$password, $dbname );

$ID = $_GET['ID'];


$sql = "SELECT Department, Image, Faculty,Name, Email_Address, ContactNumber FROM Counsellors WHERE ID = '".$ID."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div><h1>".$row["Name"]."</h1></br>";
        echo "<img src='".$row['Image']."' width='175' height='200' /></br></br>";
        echo "<ul><li>Faculty:   ".$row["Faculty"]."</br>";
        echo "<li>Department:   ".$row["Department"]."</br>";
        echo "<li>Email Address:   ".$row["Email_Address"]."</br>";
        echo "<li>Phone Number:   ".$row["ContactNumber"]."</br></ul>";
        ?>
        <button type="button" class="btn btn-primary"><a href="index3.php?ID=<?php echo $ID?>">Choose the councellor</a></button>
        <!--<button><a href="index3.php?name=<?php echo $name?>">Choose the councellor</a></button>-->
        </div>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>