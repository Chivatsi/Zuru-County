<?php 

include('connect.php');
include('header.php');

$county_array[] = $message = '';

$result = "SELECT * FROM County_Images";

 	$res=mysql_query($result, $connect);
 	if ($res) {
 		$count = mysql_num_rows($res);
 		if ($count > 0) {

 			while ( $rows = mysql_fetch_array($res)) {
 				
 		
 			//$imagename = $rows['Image_Name'];

 		
 			print("<div style = 'margin-left:10px;' class = 'container'>");
 			$county_array[] = "<li class='span3'>
 			<div class = 'thumbnails'>
	 			<a href = 'attractions.php?name={$rows['County']}'><img src = 'bootstrap/img/{$rows['Image_Name']}' class='img img-polaroid'></a> ".
	 			"</br>".
	 			"<a style = 'text-decoration:none' href = 'attractions.php?name={$rows['County']}'><b> {$rows['County']}"."</b></a>".
	 			"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 			</div>
 			</li>";

			}
			print("<br>");
		}
 		elseif($count == 0){

 			$message = "No Picture Uploded";
 		}
 	}
 ?>
 <?php include('footer.php');?>

 
 	
 	<ul class = "thumbnails">
 
 	<?php
 		if(isset($message)) echo $message;

 		foreach($county_array as $show_countie)
 		{
 			echo $show_countie;

 		}
 	?>
 	</ul>
 	</div>
 	</div>
 </div>


