<?php
include('connect.php');
include('agent_header.php');

$delete = "DELETE FROM Hotel_Details WHERE Hotel_Name = '{$_GET['name']}'";
$delete_query = mysql_query($delete);

if($delete){

	print("<div class = 'container'>");
	print '<h3 style = "color:green">The hotel has been successfully deleted</h3>';
	print ("<a href = 'hotellist.php' class = 'btn btn-primary'>GO BACK</a>");
}

include('footer.php');
?>