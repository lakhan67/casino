<?php
$server= 'localhost';
$user= 'root';
$password= '';
$db= 'mitsafe';

$conn= new mysqli($server,$user,$password,$db);
if($conn->connect_error)
{
 die("connection failed:".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql = "INSERT INTO registration (fullname, email, phone, password) VALUES ('$fullname','$email','$phone','$password')";
  $stmt = $conn->prepare($sql);
  
  if ($stmt->execute()) 
  {
      echo "<script>alert('Registration successful!');</script>";
      echo "<script>window.location='login.php' </script>";

  } else {
      echo "Error: " . $sql . "<br>" . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets\css\elements\resitration.css">
    <script src="https://kit.fontawesome.com/0509f68ff2.js" crossorigin="anonymous"></script>
    <script src="path/to/custom-validation.js"></script>

   
</head>
<body>
    <div class="w-100 backdrop"><img src="assets\img\signupback.jpg" width="100%"></div>
        <div class=" main2 ">
        <h2 class="fs-1 text-center" style="color: rgb(239, 236, 232); font-weight: 800;">Signup</h2>
        <p class="text-center fs-4" style="color: azure; font-weight: 600;">Please fill in this form to create an account.</p>
        <div class="text-left control">
        <form action="" method="post" name="userregistraion" onsubmit="return validate()">
         <div class=" d-flex justify-content-center align-items-center control"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="whitecolor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg><input type="text" id="fullname" name="fullname" size="30" placeholder="Enter Your Fullname" class="bg-transparent border-0 border-bottom text-light fw-semibold text-center" autocomplete="off">
          <br></div>

          <small id="nameerr" style="color: white; font-size: 15px; margin-left: 40%;"></small><br>

         <div class=" d-flex justify-content-center align-items-center control"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="whitecolor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
          </svg><input type="email" id="email"  name="email" size="30" placeholder="Enter Your Email Id" class="bg-transparent border-0 border-bottom text-light fw-semibold text-center" autocomplete="off">
          </div>

          <small id="emailerr" style="color: white; font-size: 15px; margin-left: 40%;"></small><br>

         <div class=" d-flex justify-content-center align-items-center control"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="whitecolor" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg><input type="tel" name="phone" id="phone"  size="30" placeholder="Enter Your Contact Number" class="bg-transparent border-0 border-bottom text-light fw-semibold text-center"  autocomplete="off">
          </div>

          <small id="phoneerr" style="color: white; font-size: 15px; margin-left: 40%;"></small><br>

         <div class=" d-flex justify-content-center align-items-center control"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="whitecolor" class="bi bi-key-fill" viewBox="0 0 16 16">
            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg> <input type="password" name="password"  id="password" size="30" placeholder="Enter Your Password" class="bg-transparent border-0 border-bottom text-light fw-semibold text-center" autocomplete="off">
          </div>
          
          <small id="passworderr" style="color: white; font-size: 15px; margin-left: 40%;"></small><br>

         <div class=" d-flex justify-content-center align-items-center control"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="whitecolor" class="bi bi-key-fill" viewBox="0 0 16 16">
            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>   <input type="password" name="cnfpassword" id="cnfpassword" size="30" placeholder="Confirm Password" class="bg-transparent border-0 border-bottom text-light fw-semibold text-center" autocomplete="off">
          </div>
          
          <small id="cnfpasserr" style="color: white; font-size: 15px; margin-left: 40%;"></small><br>

         <div style="margin-right: -30px;"  class=" d-flex justify-content-center align-items-center">
          <button type="reset" name="reset" class="button me-2">Reset</button><button type="submit" name="submit" class="button">Signup</button>
                 
        </form></div>
        
    </div>
    <div class="sidetext">
      <p>Easy to create an account</p>
      <p>Fast and Secure Withdraw</p>
      <p>Welcome Bonus Upto 1 lakh Rupees</p>
    </div>

</body>
<script>
// custom-validation.js

function validate() {
  // Get form input values
  var name = document.getElementById('fullname').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var password = document.getElementById('password').value;
  var cnfpass = document.getElementById('cnfpassword').value;

  // Get the corresponding error elements
  var nameerr = document.getElementById('nameerr');
  var emailerr = document.getElementById('emailerr');
  var phoneerr = document.getElementById('phoneerr');
  var passworderr = document.getElementById('passworderr');
  var cnfpasserr = document.getElementById('cnfpasserr');

  // Clear any previous error messages
  nameerr.innerHTML = "";
  emailerr.innerHTML = "";
  phoneerr.innerHTML = "";
  passworderr.innerHTML = "";
  cnfpasserr.innerHTML = "";

  // Perform validation checks
  var isValid = true;

  if (name.trim() === "") {
    nameerr.innerHTML = "Name is required.";
    isValid = false;
  }else if (name.length < 3){
    nameerr.innerHTML = "fullname must be at least 3 characters "
  }

  if (email.trim() === "") {
    emailerr.innerHTML = "Email is required.";
    isValid = false;
  } else if (!isValidEmail(email)) {
    emailerr.innerHTML = "Invalid email format.";
    isValid = false;
  }

  if (phone.trim() === "") {
    phoneerr.innerHTML = "Phone number is required.";
    isValid = false;
  } else if (!isValidPhone(phone)) {
    phoneerr.innerHTML = "Invalid phone number format.";
    isValid = false;
  }

  if (password.trim() === "") {
    passworderr.innerHTML = "Password is required.";
    isValid = false;
  } else if (password.length < 6) {
    passworderr.innerHTML = "Password must be at least 6 characters.";
    isValid = false;
  }

  if (cnfpass.trim() === "") {
    cnfpasserr.innerHTML = "Please confirm your password.";
    isValid = false;
  } else if (password !== cnfpass) {
    cnfpasserr.innerHTML = "Passwords do not match.";
    isValid = false;
  }

  // If all validations pass, the form will be submitted
  return isValid;
}

function isValidEmail(email) {
  // Simple email format validation using regular expression
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  return emailPattern.test(email);
}

function isValidPhone(phone) {
  // Simple phone number format validation using regular expression
  var phonePattern = /^\d{10}$/;
  return phonePattern.test(phone);
}
</script>
</html>
