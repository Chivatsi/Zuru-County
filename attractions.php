<?php 

include('connect.php');
include('header.php');

$result = "SELECT * FROM Attraction_Name WHERE County = '{$_GET['name']}'";

 	$res=mysql_query($result, $connect);
 	if ($res) {
 		$count = mysql_num_rows($res);
 		if ($count > 0) {

 			while ( $rows = mysql_fetch_array($res)) {
 			print("<div class = 'container'>");
 			print("<div class = 'span9'>");	
 			print("<a href = 'hotels.php?name={$rows['Attraction_Name']}''><img src = 'bootstrap/img/{$rows['Attraction_Image']}' class='img-polaroid' height='200' width='200'></a>");
 			print("<div style = 'margin-left:250px; margin-top:-160px;'>");
 			print("<h2>"."<a style = 'text-decoration:none' href = 'hotels.php?name={$rows['Attraction_Name']}'>{$rows['Attraction_Name']}</a>"."</h2>");
 			print("<h5>{$rows['Description']}</h5>");
 			print("<h6 style = 'color:gray'>{$rows['Description']}</h6>");
	 		print("</div>");
	 		print("<br><br><br>");
	 		print("<hr>");
 			print("</div>");
	 		print("</div>");
			}
		}
 		elseif($count == 0){

 			print("No Details Available Yet");
 		}
 	}

 include ('footer.php');
 ?>
