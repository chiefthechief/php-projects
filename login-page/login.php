<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST"){
   $username = $_POST["username"];
   $password = $_POST["password"];
}
$db = new mysqli("localhost", "root", "", "test");
if($db -> connect_error){
   die("connection failed ". $db -> connect_error);
}
$query = "select * from users where username = '$username' and password = '$password'";
$result = $db->query($query);
if($result->num_rows == 1){
   $row = $result->fetch_array(MYSQLI_ASSOC);
   $_SESSION["username"] = $username;
   header("Location: welcome.php");
}else{
   echo "invalid credentials";
}
$db->close();
?>