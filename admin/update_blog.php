<?php
if (isset($_POST['submit'])) {
    include("../connection.php");
    $meta_title = $_POST['meta_title'];
    $meta_tag = $_POST['meta_tag'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_name = $_FILES['blog_image']['name'];
   
    if ($file_name != "") {
         $file_tmp_name = $_FILES['blog_image']['tmp_name'];

        move_uploaded_file($file_tmp_name, '../images/blog/' . $file_name);

    } else {
         $file_name = $_POST['existed_blog_image'];
     }
    $sql = "UPDATE `blog` SET `meta_title`='$meta_title', `meta_tag`='$meta_tag', `title`='$title',`description`='$description',`img`='$file_name' WHERE id='" . $_POST['blog_id'] . "'";
   
   if (mysqli_query($connection, $sql)) {

        echo "<script>
                 {
            alert('Blog  updated !!')
                 }
            </script>";
        echo "<script>window.location='blog.php' </script>";

    } else {
        echo "<script>
             {    
        alert('Blog not updated !!');
        
             }
        </script>";
        echo "<script>window.location='blog.php' </script>";

    }
}
?>