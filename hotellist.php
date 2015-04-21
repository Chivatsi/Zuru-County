<?php
include('connect.php');
include('agent_header.php');

$users = "SELECT * FROM Hotel_Details";
$users_query = mysql_query($users);

while($row = mysql_fetch_array($users_query)){

	 print("<div class = 'container'>");
	 print("<div class = 'span6 offset3 '>");
	 print("<div class = 'container'>");
	 print("<img src = 'bootstrap/img/{$row['Hotel_Image']}' class='img-polaroid' height='150' width='150'> ");
	 print("<h5 style = 'color:green'>Hotel Name -> {$row['Hotel_Name']}&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp  Location -> {$row['Location']}</h5>");
	 print("<a style = 'margin-left:600px; margin-top:-30px' href = 'deletehotel.php?name={$row['Hotel_Name']}'' class = 'btn btn-warning'>Delete Hotel</a>");
	 print("<hr>");
	 print("<h6></h6>"); 
	 print("</div>");
	 print("</div>");
	 print("</div>");
	

}

include('footer.php')
?>