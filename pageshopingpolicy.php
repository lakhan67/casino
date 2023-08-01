<?php include('layout/header.php');?>

    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h2>SHOPPING POLICY</h2>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body" style="line-height: 2;">
                            <h3 class="mt-3"></h3>
                            <p style="line-height: 2;" class="mt-3">These Online Shopping Terms and Conditions, the use of this website and any order or purchase made through the facilities of this website shall be governed by the laws of the province of the United Kingdom and the laws of the United Kingdom applicable therein.</p>
                            
                            <p style="line-height: 2;" class="mt-3">You may only purchase or order items for non-commercial and lawful purposes and any other use is not permitted. You agree to pay for all charges noted herein as payable by you. You have to be 18 or older to purchase from the website.</p>
                            <p style="line-height: 2;" class="mt-3">OTI may correct errors or inaccuracies and change or update information on this website at any time without notice, including in respect of prices and availability of items. All prices listed on this website are in US dollars and all charges will be processed in US dollars. In some cases you will be guided to the website KateAnthony.net to complete the purchase, in which case you will see costs in UK GBP ££.</p>
                            <p style="line-height: 2;" class="mt-3">All prices listed on this website are subject to confirmation. OTI will notify you by e-mail within hours of making a purchase if the confirmed price of an item you have selected differs from the price listed on the website or on your purchase order. If you do not receive an e-mail within 24 hours of completing a purchase order, OTI is deemed to have confirmed the purchase at the price listed. If you receive such notification, the sale will be automatically terminated unless you reply by e-mail with confirmation of your intention to purchase the item at the confirmed price.</p>
                            <p style="line-height: 2;" class="mt-3">OTI reserves the right to limit the quantities of certain items which an individual or any group can purchase. OTI will use commercially reasonable efforts to deliver items as quickly as possible and within any time periods indicated; however, OTI will not be responsible for any delays in delivery which are beyond its control. Where delivery is delayed, OTI will notify you as soon as possible.</p>

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