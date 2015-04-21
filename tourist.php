<?php
include('connect.php');
include('agent_header.php');

$tourist = "SELECT * FROM Attraction_Name";
$tourist_query = mysql_query($tourist);

while($row = mysql_fetch_array($tourist_query)){


	 print("<div class = 'container'>");
	 print("<div class = 'span6 offset3 '>");
	 print("<h6 style = 'color:green'>Attraction Name -> {$row['Attraction_Name']}&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp County -> {$row['County']}</h6>");
	 print("<hr>");
	 print("<h6></h6>"); 
	 print("</div>");
	  print("</div>");
	 print("</div>");

}

include('footer.php')
?>