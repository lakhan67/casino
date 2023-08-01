<?php

session_start();
// print_r($_SESSION);
// exit();
unset($_SESSION["ID"]);

header("Location:index.php");
?>