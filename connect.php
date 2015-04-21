<?php
$connect = mysql_connect("localhost", "root", "")or die("Could not establish connection");
$db_select = mysql_select_db("Hotel_System" , $connect) or die("Could not connect to database");
?>