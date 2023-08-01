<?php include('layout/header.php');?>
    <!-- ====== end navbar ====== -->

    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h2>Privacy Policy</h2>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body" style="line-height: 2;">
                            <h3 class="mt-3"></h3>
                            <p style="line-height: 2;" class="mt-3">This Privacy Policy governs the manner in which
                                MITSAFE Internet Marketing collects, uses, maintains and discloses information collected
                                from users (each, a "User") of the https://MITSAFE.com website ("Site"). This privacy
                                policy applies to the Site and all products and services offered by MITSAFE Internet
                                Marketing.</p>
                            <h3 class="mt-3">Personal identification information</h3>
                            <p style="line-height: 2;" class="mt-3">We may collect personal identification information
                                from Users in a variety of ways, including, but not limited to, when Users visit our
                                site, register on the site, place an order, subscribe to the newsletter, respond to a
                                survey, fill out a form, and in connection with other activities, services, features or
                                resources we make available on our Site. Users may be asked for, as appropriate, name,
                                email address, mailing address, phone number, credit card information. Users may,
                                however, visit our Site anonymously. We will collect personal identification information
                                from Users only if they voluntarily submit such information to us. Users can always
                                refuse to supply personally identification information, except that it may prevent them
                                from engaging in certain Site related activities.</p>

                            <h3 class="mt-3">Non-personal identification information</h3>
                            <p style="line-height: 2;" class="mt-3">We may collect non-personal identification
                                information about Users whenever they interact with our Site. Non-personal
                                identification information may include the browser name, the type of computer and
                                technical information about Users means of connection to our Site, such as the operating
                                system and the Internet service providers utilized and other similar information.</p>
                            <p style="line-height: 2;" class="mt-3">Our Site may use "cookies" to enhance User
                                experience. User's web browser places cookies on their hard drive for record-keeping
                                purposes and sometimes to track information about them. User may choose to set their web
                                browser to refuse cookies, or to alert you when cookies are being sent. If they do so,
                                note that some parts of the Site may not function properly.</p>
                            <h3 class="mt-3">How we use collected information</h3>
                            <p style="line-height: 2;" class="mt-3">MITSAFE Internet Marketing may collect and use Users
                                personal information for the following purposes:</p>
                                <h5 class="mt-3">To improve customer service</h5>
                            <p style="line-height: 2;" class="mt-3">Information you provide helps us respond to your customer service requests and support needs more efficiently.</p>

                            <h5 class="mt-3">To personalize user experience</h5>
                            <p style="line-height: 2;" class="mt-3">We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</p>
                            <h5 class="mt-3">To improve our Site</h5>
                            <p style="line-height: 2;" class="mt-3">We may use feedback you provide to improve our products and services.</p>

                            <h5 class="mt-3">To process payments</h5>
                            <p style="line-height: 2;" class="mt-3">We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.</p>
                            <h5 class="mt-3">To run a promotion, contest, survey or other Site feature</h5>
                            <p style="line-height: 2;" class="mt-3">To send Users information they agreed to receive about topics we think will be of interest to them.</p>

                            <h5 class="mt-3">To send periodic emails</h5>
                            <p style="line-height: 2;" class="mt-3">We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</p>








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