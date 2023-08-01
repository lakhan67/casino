<?php

$host = $_SERVER['HTTP_HOST'];
$con = ""; 


if($host == 'mitsafewebsite.modvent.com'){

    
    $db_server="localhost";
    $db_name="modvent_mitsafewebsite";
    $db_username='modvent_mitsafewebsite';
    $db_password='modern@web23';
 
}
else{ 

    $db_server="localhost";
    $db_name="mitsafe";
    $db_username='root';
    $db_password='';
 
} 




define("EMAIL_HOST","smtp.gmail.com");
define("EMAIL_USERNAME","modernt231@gmail.com"); 
define("EMAIL_PASSWORD","mdvhbiieuadjpnjr");

define("EMAIL_FROMMAIL","moderntechnologies12@gmail.com");
define("EMAIL_FROMNAME","MIT SAFE");
define("RECAPTCHA_SITEKEY","6LeCyz0kAAAAAEkL8-k7tZ3dzWkJ5oJj_UWPT7oM");
define("RECAPTCHA_SECRETKEY","6LeCyz0kAAAAAHBpvk8WJDFsXqU35sg11YCTZgHP");


try{
    $pdo = new PDO("mysql:host=" . $db_server . ";dbname=" .$db_name, $db_username, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


function getPageBlogDetail($pdo,$pagename){

    $stmt_sel=$pdo->prepare("select title,description,author,keywords from blog_details where page_name=:pname");

    $stmt_sel->bindParam(":pname",$pagename);

    $stmt_sel->execute();

    $blog_detail=    $stmt_sel->fetch(PDO::FETCH_ASSOC);

    if(empty(    $blog_detail)){
        return array('title'=>'','description'=>'','author'=>'','keywords'=>'');
    }


    return  $blog_detail;

 
}

 


?>