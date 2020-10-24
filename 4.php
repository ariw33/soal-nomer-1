<?php 
$servername = "localhost";
$username = "root";
$password = "gx58ud9x";
$db1 = "tes5";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE ".$db1."";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn2 = mysqli_connect($servername, $username, $password, $db1);
$table1 = "CREATE TABLE book_tb (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                name VARCHAR( 128 ) NOT NULL ,
                category_id VARCHAR( 64 ) NOT NULL ,
                writer_id VARCHAR( 16 ) NOT NULL ,
                Publication_year VARCHAR( 16 ) NOT NULL ,
                img VARCHAR( 32 ) NOT NULL
                )";
if (mysqli_query($conn2, $table1)) {
  echo "Table book_tb created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn2);
}
$table2 = "CREATE TABLE category_tb (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                name VARCHAR( 128 ) NOT NULL
                )";
if (mysqli_query($conn2, $table2)) {
  echo "Table category_tb created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn2);
}				
mysqli_close($conn2);

?>