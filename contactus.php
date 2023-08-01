<!DOCTYPE html>
<html lang="en">
<?php
include('layout/header.php');

include_once("sendmail.php");
include_once('config.php');
$sended_mail = false;

$recaptcha_validated = true;

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

    // if(isset($_POST['btnsubmit'])){ 

    $getResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . RECAPTCHA_SECRETKEY . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($getResponse);


    if ($responseData->success) {

        $subject = 'Contact Us-' . $_POST['fname'] . " " . $_POST['lname'];

        $message = $_POST['message'];

        $body = "";

        $body = "<p><b>Name=</b>" . $_POST['fname'] . " " . $_POST['lname'] . "</p>";

        $body = $body . "<p><b>Email=</b>" . $_POST['email'] . "</p>";

        $body = $body . "<p><b>Mobile No.=</b>" . $_POST['mob_no'] . "</p>";

        $body = $body . "<p><b>Message=</b>" . $message . "</p>";


        sendHtmlMail('moderntechnologies12@gmail.com', $subject, $body);
        $sended_mail = true;


    } else {
        $recaptcha_validated = false;
    }



}
if (isset($_POST['btnsubmit'])) {
    include('connection.php');
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $mobile_number = $_POST['mob_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $date = date("Y-m-d H:i:s");
    $sql = "insert into contact(first_name,last_name,email,mobile_number,message,updated_at) values('$first_name','$last_name','$email','$mobile_number','$message','$date')";

    if (mysqli_query($connection, $sql)) {
        echo "<script>{
                  alert('successfully !!');
                  
                 }
                  </script>";
        echo "<script>window.location='contactus.php' </script>";

    } else {

        echo "<script>{
             alert('Not successfully !!');
            
         } 
             </script>";
        echo "<script>window.location='contactus.php' </script>";

    }
}

?>

<!--Contents-->
<main class="contact-page style-5">
    <!-- ====== start contact page ====== -->
    <section class="contact section-padding pt-50 style-6">
        <div class="container">
            <div class="section-head text-center mb-100 style-5">
                <h2 class=""> Get In <span> Touch </span> </h2>
                <p>We will contact again after receive your request in 24h</p>
            </div>
            <div class="text-center mb-100" style="margin-top: -60px;">
                <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50  color-blue5">+91-6265944392</h2>
                <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50  color-blue5">USA +1-(516) 847-4997</h2>
                <!-- <h4 class="fw-normal mb-20 color-000">contact@Itecksolution.com</h4> -->
                <h4 class="fw-normal mb-10 color-000">202 Business Island Nipaniya Indore</h4>
            </div>
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php

                        if ($sended_mail == true) {
                            ?>
                            <div class="alert alert-success">Contact Us Form submitted successfully, We will contact you
                                shortly</div>

                            <?php

                        } else if ($recaptcha_validated == false) {
                            ?>
                                <div class="alert alert-warning">Please verify you are not robot</div>

                            <?php

                        }

                        ?>
                        <form action="contactus.php" class="form" method="post">
                            <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="fname" class="form-control" placeholder="First Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="mob_no" class="form-control"
                                            placeholder="Mobile Number" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="10" name="message" class="form-control"
                                            placeholder="message here" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12" style="margin-top:30px;">
                                    <div class="form-group">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LcQdS4kAAAAAIvaPOvXtOKUmoUbxrWvF2xznL4f"></div>

                                    </div>

                                </div>

                                <div class="col-lg-12 text-center" style="visibility: hidden;""">
                                    <div class="form-check d-inline-flex mt-30 mb-30">
                                        <input class="form-check-input me-2 mt-0" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label small" for="flexCheckDefault">
                                            By submitting, i’m agreed to the <a href="#"
                                                class="text-decoration-underline">Terms & Conditons</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <input type="submit" name="btnsubmit" value="Send Your Request"
                                        class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
            </div>
        </div>
    </section>
    <!-- ====== end contact page ====== -->

    <!-- ====== start contact page ====== -->
    <!-- <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24219.60999175365!2d-73.9764341314902!3d40.64198229194528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b400c94a227%3A0x18e2a4d3fb21f0ec!2sFlatbush%2C%20Brooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1651361759450!5m2!1sen!2seg" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
    <!-- ====== start contact page ====== -->
</main>
<!--End-Contents-->

<!-- ====== start footer ====== -->
<?php include('layout/innerFooter.php') ?>
<script src="assets/js/lib/jquery-3.0.0.min.js"></script>
<script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<script src="assets/js/lib/wow.min.js"></script>
<script src="assets/js/lib/jquery.fancybox.js"></script>
<script src="assets/js/lib/lity.js"></script>
<script src="assets/js/lib/swiper.min.js"></script>
<script src="assets/js/lib/jquery.waypoints.min.js"></script>
<script src="assets/js/lib/jquery.counterup.js"></script>
<script src="assets/js/lib/pace.js"></script>
<script src="assets/js/lib/scrollIt.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>