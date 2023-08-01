<?php include('layout/header.php');?>
    <!-- ====== end navbar ====== -->

    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h2>REFUND AND CANCELLATION POLICY</h2>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body" style="line-height: 2;">
                            <h3 class="mt-3"></h3>
                            <p style="line-height: 2;" class="mt-3">A full refund will be made if you secede to cancel our services within 3 days of making the payment.</p>
                           
                            <p style="line-height: 2;" class="mt-3">If you (Customer) choose to terminate our services after the initial 3 days then you will be charged an amount equivalent to the working hours put into the project. The balance will be credited to the account from which you made payment within 40 days of cancellation. Cancellation of any service renewal should be done 15 days prior to the start of the next billing cycle.</p>

                            
                                <p style="line-height: 2;" class="mt-3">If the process cancellations are made after the start of the billing cycle then an amount equivalent to the working hours put into the project during that month will be chargeable, which the clients will be have to pay.</p>
<p style="line-height: 2;" class="mt-3">If you take up for our services but did not make use of them then you are still entitled to pay us.
    The amount of refund will be credited in the account from which the payment was made within 40 days of service cancellation.</p> 
                              
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </section>
    <!-- ====== end inner-header style-5 ====== -->

    <!--Contents-->

    <!--End-Contents-->

    <!-- ====== start footer ====== -->
<?php include('layout/innerFooter.php')?>
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
    <script>
        $('.upload_input').on('change', function (event) {
            var files = event.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                $("#upload_text").html(file.name).css("color", "#fff")
                // $("<div class='file__value'><div class='file__value--text'>" + file.name + "</div><div class='file__value--remove' data-id='" + file.name + "' ></div></div>").insertAfter('#upload_text');
            }
        });
    </script>

</body>

</html>