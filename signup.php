<?php
 $firstName = $_POST['firstname'];
 $lastName = $_POST['lastname']; 
 $email = $_POST['email'];
 $password = $_POST['password'];
$host = "localhost";
$user = "root";
$pass = "";
$db = "ShelfShare";
$conn = new mysqli($host, $user, $pass, $db);
if($conn-> connect_error){
    die('Connection Failed: '.$conn->connect_error);
    echo "There are some problems with connection";
}else{
    $stmt = $conn->prepare("insert into registration(firstname, lastname, email, password) values( ?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstName, $lastName, $email, $password);
    $stmt-> execute();
    echo "Signup Successfull";
    $stmt->close();
    $conn->close();
    header("Location:login.html");
}
?>