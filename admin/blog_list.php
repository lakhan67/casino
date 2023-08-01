<?php
    include("header.php");
    include("menu.php");
    include("config.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="blog.php" class="btn btn-primary ml-auto" style="float:right;margin-right:10px;padding: 3px 5px 3px 0px;"><i class="material-icons">add</i>Add Blogs</a>
            </div>
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
                                    $count=1;
                                    $sql = "SELECT * FROM blog";
                                    $result = mysqli_query($con, $sql);
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       
                                    ?>
                                        <tr>
                                            <td class='text-center'><?php echo $count++; ?></td>
                                            <td><?php echo $row['title'] ?></td>
                                            <td><?php echo $row['description'];?></td>

                                            <td class="td-actions">
                                               
                                                <a href="delete_blog.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></a>&nbsp;
                                                <a href="edit_blog.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit" style="font-size:20px;color:blue"></i></a>
                                                
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
<script>
  function openPage(pageName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {

    }
    document.getElementById(pageName).style.display = "block";

  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
<?php include('footer.php') ?>