<?php   
session-start();

$server='localhost';
$user='root';
$password='';
$db='mitsafe';


$conn= new mysqli($server,$user,$password,$db);

if($conn->connect_error)
{
  die('connectoin failed:'. $conn->connect_error);
}
  if($_REQUEST["REQUEST_METHOD"]=== "POST" && isset($_POST['login_form']))
{
  $username= $_POST['username'];
  $password= $_POST['password'];

  $sql="select id from registration where email = ? and password = ? ";
  $stmt= $conn->prepare($sql);
  $stmt->execute();
  $stmt->store_result();

}
  



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
                <script src="path/to/custom-validation.js"></script>

    <link rel="stylesheet" href="assets\css\elements\login.css">
</head>
<body>
    <div class="w-75 backdrop "><img src="assets\img\banner3.jpg" width="80%" height="600px"></div>
    <div class="log">
        <label class="d-flex fw-bolder p-3 fs-4" style=" margin-left: 17%; color: rgb(176, 176, 247);">SignIn in to your account</P></label>
        <form action="" method="post" name="userlogin">
            <div class=" d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="whitecolor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg><input type="text" id="username" name="username" size="30" placeholder="Enter Your emailid" class="bg-transparent fw-semibold text-center border-3" style="color: rgb(2, 2, 90);"><br></div>
              <span id="username" style="font-weight: 600; color: white; font-size: small; margin-left: 40%;"></span><br>
              <div class=" d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="whitecolor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg> &nbsp;<input type="password" name="password" id="passerr" size="30" placeholder="Enter Your Password" class="bg-transparent border-3 text-light fw-semibold text-center"></div><span id="password" style="font-weight: 600; color: white; margin-left: 45%; font-size: small;"></span><br>
              <input type="hidden" name="login_form" value="1">
              <button type="submit">Sign In</button>
              <button class="mt-2 button2"><a href="registration.html">NewUser? Sign up</a></button>

        </form>
              <p class="p-2 text-center ms-5"><a href=" ">Forgot Password?</a></p>

    </div>
    
</body>
<script>
// custom-validation.js

function validateLogin() {
  // Get form input values
  var username = document.getElementById('username').value;
  var password = document.getElementById('passerr').value;

  // Get the corresponding error elements
  var usernameError = document.getElementById('usernameError');
  var passwordError = document.getElementById('passwordError');

  // Clear any previous error messages
  usernameError.innerHTML = "";
  passwordError.innerHTML = "";

  // Perform validation checks
  var isValid = true;

  if (username.trim() === "") {
    usernameError.innerHTML = "Username is required.";
    isValid = false;
  }

  if (password.trim() === "") {
    passwordError.innerHTML = "Password is required.";
    isValid = false;
  }

  // If all validations pass, the form will be submitted
  return isValid;
}
</script>
</html>