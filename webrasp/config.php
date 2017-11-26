<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "test";
$conn = mysqli_connect($servername, $username, $password,$database);
mysqli_query($conn,"SET character_set_results=utf8");
mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");
?>