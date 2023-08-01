<?php 
include('dbconnection.php');
if(isset($_POST['submit']))
  {
    $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=($_POST['password']);
	$country=$_POST['country'];

    //  $ret=mysqli_query($con, "select * from register where email='$email', password='$password'");
	//  $result=mysqli_fetch_array($ret);
    //  if($result>0){
    //  echo "<script>alert('This email  already associated with another account');</script>";
    // }
    // else{
    $query=mysqli_query($con, "insert into admin(firstname, lastname, email,  password, country) value('$firstname', '$lastname', '$email', '$password', '$country' )");
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href ='authentication-signup.php'</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
       echo "<script>window.location.href ='authentication-signup.php'</script>";
    }
}

 ?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Admin</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<!-- <div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="authentication-signin.html">Sign in here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div> -->
									<div class="form-body">
										<form class="row g-3" method="POST" action="">
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">First Name</label>
												<input type="text" class="form-control"  name="firstname" id="inputFirstName" placeholder="Jhon" required="true">
											</div>
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Last Name</label>
												<input type="text" class="form-control" name="lastname" id="inputLastName" placeholder="Deo" required="true">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="text" class="form-control" name="email" id="inputEmailAddress" placeholder="example@user.com" required="true">
											</div>
											<div class="col-12">
												<label for="inputPassword" class="form-label">Password</label>
												<div class="input-group">
													<input type="text" class="form-control" name="password" placeholder="Enter Password" required="true">
												</div>
											</div>
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select class="form-select" name="country" id="inputSelectCountry" aria-label="Default select example" required="true">
													<option selected>India</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="America">America</option>
													<option value="Dubai">Dubai</option>
												</select>
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>	
</html>