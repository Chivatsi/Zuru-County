<?php 
include('connect.php');
include('header.php');

$result = "SELECT * FROM Hotel_Images WHERE Hotel_Name = '{$_GET['name']}'";
$res=mysql_query($result, $connect);
 	if ($res) {
 		$count = mysql_num_rows($res);
 		if ($count > 0) {

 			while ( $rows = mysql_fetch_array($res)) {
 				print("<div class = 'container'>");
 				print("<div class = 'span12'>");
				print("<img src = 'bootstrap/img/{$rows['Hotel_Image']}' class='img-polaroid' height='400' width='400'> ");
 				print("<div style = 'margin-left:500px; margin-top:-410px;'>");
	 			print("<h1 style = 'text-decoration:none; color:#428bcd' href = 'fulldetails.php?name={$rows['Hotel_Name']}'>{$rows['Hotel_Name']}"."</h1>");
	 		    print("</div>");
	 			print("</div>");
	 			// $hotel=$rows['Hotel_Name'];
				}
			}
	 		elseif($count == 0){

	 			print("No Details Available Yet");
 		}
 	}

 	$result2 = "SELECT * FROM Hotel_Details  WHERE Hotel_Name = '{$_GET['name']}'";
	 			$res2 = mysql_query($result2, $connect);
	 			if($res2)
	 			{
	 				$count2 = mysql_num_rows($res2);

	 				if($count2 > 0){

	 					while($rows1 = mysql_fetch_array($res2)){

	 					print("<div style = 'margin-left:530px; margin-top:40px'>");
	 					print("<br>");
	 					print("<h4 style = 'color:gray'>"."{$rows1['Location']}"."&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp"."{$rows1['Postal']}"."</h4>");	
	 					print("<hr>");
	 					print("<h4>"."{$rows1['Services']}"."</h4>");
	 					print("<br><br>");
	 					print("<hr>");
	 					print("<h5 style = 'color:gray'>"."{$rows1['Telephone']}"."</h5>");
	 					print("<h5 style = 'color:gray'>"."{$rows1['Email']}"."</h5>");
	 					print("<div style = 'margin-left:300px; margin-top:-50px'>");
	 			print("<p>"."<a style = 'text-decoration:none' href = 'book.php?name= {$rows['Hotel_Name']}' class = 'btn-primary btn-large' data-toggle='modal'>Reserve Room</a>"."</p>");
	 					
	 					print("</div>");
	 					}

	 				}
	 			 
	 			}
;?>



<?include('footer.php');?>