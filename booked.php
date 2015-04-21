<?php
include('connect.php');
include('agent_header.php');

$book = "SELECT * FROM Book";
$book_query = mysql_query($book);

while($row = mysql_fetch_array($book_query)){


	 print("<div class = 'container'>");
	 print("<div class = 'span6 offset3 '>");
	 print("<h6 style = 'color:black'>{$row['id']}");
	 print("<h6 style = 'color:green'>Hotel Name -> {$row['hotelname']}&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp  Check In Date -> {$row['indate']}</h6>");
	 print("<hr>");
	 print("<h6></h6>"); 
	 print("</div>");
	 print("</div>");
	 print("</div>");

}

include('footer.php')
?>
