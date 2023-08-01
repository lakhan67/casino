<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $meta_title = $_POST['meta_title'];
    $meta_tag = $_POST['meta_tag'];
   
    $title = $_POST['title'];
   
    $date = date('Y-m-d');
    
    $description = $_POST['description'];
    $file_name = $_FILES['blog_image']['name'];
    $file_tmp_name = $_FILES['blog_image']['tmp_name'];
    move_uploaded_file($file_tmp_name, "../images/blog/$file_name");

    $sql = "INSERT INTO blog(meta_title,meta_tag,title,description,img,date) VALUES
    ('$meta_title','$meta_tag','$title','$description','$file_name','$date')";
    if (!mysqli_query($connection, $sql)) {
        echo "<script>{
                 alert('Blog Not add!!');
                 
                }
                 </script>";
        echo "<script>window.location='blog.php' </script>";

    } else {

        echo "<script>{
            alert('Blog  added!!');
           
        }
            
            </script>";
        echo "<script>window.location='blog.php' </script>";

    }

}