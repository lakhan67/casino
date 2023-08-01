<?php include('layout/header.php');
include_once('connection.php');



?>

<!--Contents-->
<main class="blog-page style-5">


    <!-- ====== start blog-slider ====== -->
    <section class="blog-slider pt-50 pb-50 style-1">
        <div class="container">
            <div class="section-head text-center mb-60 style-5">
                <h2 class="mb-20"> Our <span> Journal </span> </h2>
                <div class="text color-666">Get the latest articles from our journal, writing, discuss and share</div>
            </div>
            <div class="blog-details-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="assets/m1.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#"
                                                        class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                    <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                        ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                        Expert Perspective</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                    wireless technology has changed the way we work, it’s that will
                                                    everyone is now connected [...]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="assets/m2.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#"
                                                        class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                    <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                        ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                        Expert Perspective</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                    wireless technology has changed the way we work, it’s that will
                                                    everyone is now connected [...]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="assets/m3.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#"
                                                        class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                    <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                        ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                        Expert Perspective</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                    wireless technology has changed the way we work, it’s that will
                                                    everyone is now connected [...]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== pagination ====== -->
                <div class="swiper-pagination"></div>
                <!-- ====== arrows ====== -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ====== end blog-slider ====== -->


    <!-- ====== start Popular Posts ====== -->
    <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
        <div class="container">
            <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
            <div class="row gx-5">
                <?php
                $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 10";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4 border-end brd-gray">
                        <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                            <div class="img radius-7 overflow-hidden img-cover">
                                <img src="images/blog/<?php echo $row['img']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body px-0">
                                <small class="d-block date mt-10 fs-10px fw-bold">
                                    <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">Posted on Days ago</a>
                                </small>
                                <h5 class="fw-bold mt-10 title">
                                    <a href="page-single-blog.php?blog_id=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a>
                                </h5>
                                <p class="small mt-2 op-8 fs-10px">
                                    <?php echo $row['description']; ?>
                                </p>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                            a
                                        </span>
                                        <a href="#" class="mt-1">
                                            By Admin
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ====== end Popular Posts ====== -->

    <style>
        .disabled,
        .link {
            padding: 3px 7px;
            margin: 10px;
            background: none;
            border-radius: 3px;
            border: 1px solid #232323;
        }

        .disabled {
            cursor: default;
        }

        .link {
            cursor: pointer;
            color: blue;
        }

        .link:hover {
            color: blue;
        }

        .current {
            padding: 3px 7px;
            margin: 10px;
            border-radius: 3px;
            border: 1px solid #000;
            background: #d1d1d1;
        }

        #pagination {
            margin: 6px auto 0px;
            width: 100%;
            line-height: 30px;
            border-radius: 3px;
            min-height: 300px;
        }
    </style>
    <!-- ====== start all-news ====== -->
    <section class="all-news section-padding blog bg-transparent style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
                    <script>
                        function getresult(url) {
                            $('#loader-icon').show();
                            $.ajax({
                                url: url,
                                type: "GET",
                                data: { rowcount: $("#rowcount").val() },
                                success: function (data) {
                                    $("#pagination").html(data);
                                    $("#loader-icon").hide();
                                },
                                error: function () { }
                            });
                        }
                    </script>
                    <div id="pagination">
                    </div>


                    <script>
                        getresult("getresult.php");
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end all-news ====== -->

</main>
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