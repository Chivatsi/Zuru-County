<?php
include('connect.php');
include('agent_header.php');

$book = "SELECT * FROM Book";
$book_query = mysql_query($book);

while($row = mysql_fetch_array($book_query)){


	 print("<div class = 'container'>");
	 print("<p>{$row['hotelname']}</p>");
	 print("</div>");

}

include('footer.php')
?>