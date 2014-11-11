<?php
$con=mysqli_connect("localhost","root","123456");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create database
$sql="CREATE DATABASE kohana";
if (mysqli_query($con,$sql)) {
  echo "Database kohana created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
}


$con=mysqli_connect("localhost","root","123456","kohana");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables 

$sql="CREATE TABLE articles(
            id INT(11) AUTO_INCREMENT NOT NULL,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            adress VARCHAR(100) NOT NULL,
            city VARCHAR(100) NOT NULL,
            country VARCHAR(100) NOT NULL,
            PRIMARY KEY (id)
            )";
   
if (mysqli_query($con,$sql)) {
  echo "Table test created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);

?>
