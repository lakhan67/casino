<?php
require_once("connection.php");
require_once("pagination.class.php");
$perPage = new PerPage();
$sql = "SELECT * FROM blog ORDER BY id DESC";
$paginationlink = "getresult.php?page=";
$page = 1;
if (!empty($_GET["page"])) {
    $page = $_GET["page"];
}
$start = ($page - 1) * $perPage->perpage;
if ($start < 0) {
    $start = 0;
}
$statement = $connection->prepare($sql);
$statement->execute();

$result = $statement->get_result();
$perpageresult = $perPage->perpage($result->num_rows, $paginationlink);
$query = $sql . " limit " . $start . "," . $perPage->perpage;
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->get_result();
$output = '';
while ($row = mysqli_fetch_array($result)) {
    ?>
    <section class="all-news section-padding blog bg-transparent style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="img img-cover">
                                    <img src="images/blog/<?php echo $row['img']; ?>" class="radius-7" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body p-0">
                                    <small class="d-block date text">
                                        <a href="#"
                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
                                            news </a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">12 Days ago</a>
                                    </small>
                                    <a href="page-single-blog.php?blog_id=<?php echo $row['id']; ?>"
                                        class="card-title mb-10"><?php echo $row['title']; ?></a>
                                    <p class="fs-13px color-666">
                                        <?php echo $row['description']; ?>
                                    </p>
                                    <div
                                        class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span
                                                class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#">
                                                <small class="text-muted">By</small> Admin
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
                    </div>
                    <?php
                     }
                if (!empty($perpageresult)) {
                    $output .= $perpageresult;
                }
                print $output;
                ?>
            </div>
        </div>
    </div>
</section>