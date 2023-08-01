<?php
session_start();
include('../connection.php');
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * FROM `admin` WHERE email='" . $email . "' and password='" . $password . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if (is_array($row)) {
    $_SESSION["ID"] = $row['id'];
    $_SESSION["email"] = $row['email'];
    
    header("Location: dashboard.php");
} else {

    echo "<script>{
            alert('Invalid Email ID/Password!!');
           }</script>";
    echo "<script>window.location='index.php' </script>";
}

?>