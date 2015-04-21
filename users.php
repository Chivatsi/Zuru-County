<?php
include('connect.php');
include('agent_header.php');

$users = "SELECT * FROM Sign_Up";
$users_query = mysql_query($users);

while($row = mysql_fetch_array($users_query)){

	 print("<div class = 'container'>");
	 print("<div class = 'span6 offset3 '>");
	 print("<div class = 'container'>");
	 print("<h6 style = 'color:green'>User Name -> {$row['Username']}&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp  Email Address-> {$row['Email']}</h6>");
	 print("<a style = 'margin-left:500px; margin-top:-30px' href = 'delete.php?name={$row['Username']}'' class = 'btn btn-warning'>Delete User</a>");
	 print("<hr>");
	 print("<h6></h6>"); 
	 print("</div>");
	 print("</div>");
	 print("</div>");
	

}

include('footer.php')
?>