<?php

$name = $_POST['name'];
$email = $_POST['email'];
$messgae = $_POST['message'];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "bajao";

// Create connection
$conn = new mysqli('localhost','root','','bajao');

// Check connection
if ($conn->connect_error) {
  die('Connection failed : '.$conn->connect_error);
}

else{
  $stmt = $conn->prepare("insert into info(name,email,message) values(?,?,?)");
  $stmt->bind_param("sss",$name,$email,$messgae);
  $stmt->execute();
  echo "Form Submitted Successfully !";
  
}

?>