<?php 
session_start();
 $email = $_POST['uname'];
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
    $sql ="select * from registration where email='".$email."'AND password='".$password."' limit 1"; 
       
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {            
            header('location:list.html');
    }
    else
    {
        $_SESSION['message'] = "username or password is invalid";
        
        header('location:Login.html');   
    }       
}
?>