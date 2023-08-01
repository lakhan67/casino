<?php
include("../connection.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

$sql="DELETE FROM `blog` WHERE id='".$_GET['id']."'";
 if (mysqli_query($connection, $sql)) {
	 echo "<script>toast.error('Deleted Successfully');</script> ";
     echo "<script>window.location='blog.php' </script>";
    
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
	 
?>