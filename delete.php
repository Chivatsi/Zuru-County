<?php
include('connect.php');
include('agent_header.php');

$delete = "DELETE FROM SIGN_UP WHERE Username = '{$_GET['name']}'";
$delete_query = mysql_query($delete);

if($delete){

	print("<div class = 'container'>");
	print '<h3 style = "color:green">The user has been deleted</h3>';
	print ("<a href = 'users.php' class = 'btn btn-primary'>GO BACK</a>");
}

include('footer.php');
?>