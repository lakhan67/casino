<?php include('layout/header.php');?>

    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h2>Terms and Condition</h2>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body" style="line-height: 2;">
                            <h3 class="mt-3">1.Terms</h3>
                            <p style="line-height: 2;" class="mt-3">By accessing this web site, you are agreeing to be bound by these
                                web site Terms and Conditions of Use, all applicable laws and regulations, and agree
                                that you are responsible for compliance with any applicable local laws. If you do not
                                agree with any of these terms, you are prohibited from using or accessing this site. The
                                materials contained in this web site are protected by applicable copyright and</p>
                            <h3 class="mt-3">2.Use License</h3>
                            <p style="line-height: 2;" class="mt-3">1. Permission is granted to temporarily download one copy of the
                                materials (information or software) on MITSAFE's web site for personal, non-commercial
                                transitory viewing only. This is the grant of a license, not a transfer of title, and
                                under this license you may not:</p>
                            <p style="line-height: 2;" class="mt-1">Modify or copy the materials;</p>
                            <p style="line-height: 2;" class="mt-1">Use the materials for any commercial purpose, or for any public
                                display (commercial or non-commercial);</p>
                            <p style="line-height: 2;"class="mt-1">Attempt to decompile or reverse engineer any software contained
                                on MITSAFE's web site;</p>
                            <p style="line-height: 2;" class="mt-1">Remove any copyright or other proprietary notations from the materials; or</p>
                            <p style="line-height: 2;" class="mt-1">Transfer the materials to another person or "mirror" the materials on any other server.
                            </p>
                            <p style="line-height: 2;"class="mt-1">2.This license shall automatically terminate if you violate any
                                of these restrictions and may be terminated by MITSAFE at any time. Upon terminating
                                your viewing of these materials or upon the termination of this license, you must
                                destroy any downloaded materials in your possession whether in electronic or printed
                                format.</p>
                                <h3 class="mt-3">3.Disclaimer</h3>
                                <p style="line-height: 2;" class="mt-3">The materials on MITSAFE's web site are provided "as is". MITSAFE makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, MITSAFE does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.</p>

                                <h3 class="mt-3">4.Limitations</h3>
                                <p style="line-height: 2;" class="mt-3">In no event shall MITSAFE or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on MITSAFE's Internet site, even if MITSAFE or a MITSAFE authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

                                <h3 class="mt-3">5.Revisions and Errata</h3>
                                <p style="line-height: 2;" class="mt-3">In no event shall MITSAFE or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on MITSAFE's Internet site, even if MITSAFE or a MITSAFE authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

                                <h3 class="mt-3">6.Links</h3>
                                <p style="line-height: 2;" class="mt-3">MITSAFE has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by MITSAFE of the site. Use of any such linked web site is at the user's own risk.</p>

                                <h3 class="mt-3">7.Site Terms of Use Modifications</h3>
                                <p style="line-height: 2;" class="mt-3">MITSAFE may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>

                                <h3 class="mt-3">8.Governing Law</h3>
                                <p style="line-height: 2;" class="mt-3">Any claim relating to MITSAFE's web site shall be governed by the laws of the State of Texas without regard to its conflict of law provisions.</p>
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
<?php  include('layout/innerFooter.php')?>
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