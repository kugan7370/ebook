<?php 
date_default_timezone_set("Asia/Colombo");
$connection=mysqli_connect("localhost","root","","ebook");
if(!$connection){
    die("database not connected");
}

?>