
    <!--start header -->
    <?php
    session_start();

    error_reporting(E_ALL & ~E_NOTICE);
    if ($_SESSION['ID'] > 0) {
    include('header.php'); ?>
    <!--end header -->
    <!--start page wrapper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Blogs</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Blogs List</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
              <a href="add_blog_details.php" class="btn btn-primary">Add Blog</a>
            </div>
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="main-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-plain">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0">Blogs</h4>
                  </div>
                  <div class="card-body tabcontent">
                    <div class="table-responsive">
                      <table class="table table-hover table-stripped">
                        <thead class="">
                          <th class='text-center'>#</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                          <?php
                          include('../connection.php');
                          $count = 1;
                          $sql = "SELECT * FROM blog";
                          $result = mysqli_query($connection, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <tr>
                              <td class='text-center'>
                                <?php echo $count++; ?>
                              </td>
                              <td>
                                <?php echo $row['title'] ?>
                              </td>
                              <td>
                                <?php echo $row['description']; ?>
                              </td>

                              <td>

                                <a href="delete_blog.php?id=<?php echo $row['id'] ?>" style="color:red;">Delete </a>&nbsp;
                                <a href="edit_blog.php?id=<?php echo $row['id']; ?>">Edit</a>

                              </td>
                              <td></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <?php include('footer.php'); 
    }else {
      echo "<script>window.location='index.php' </script>";
  }
    ?>
  </div>
  <!--end wrapper-->
  