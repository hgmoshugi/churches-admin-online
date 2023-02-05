<?php
$host="localhost";
$uname="root";
$pas="";
$db_name="cman_db";
$tbl_name="members";
		
$conn = @mysqli_connect("$host","$uname","$pas","$db_name") or die ("cannot connect to the database");
?>