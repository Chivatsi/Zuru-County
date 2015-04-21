<?php 
include 'connect.php';

if (isset($_POST['images']) && isset($_POST['county'])) {
	
	$images = $_POST['images'];
	$county = $_POST['county'];

	if (!empty($images) && !empty($county)) {
		$query = "INSERT INTO County_Images(Image_Name,County) VALUES('{$images}','{$county}')";
		$query_run = mysql_query($query);
	}
}
?>

<form action = 'images.php' method = 'post' role = 'form'>
<input type = 'file' name = 'images'>
<input type = 'text' name = 'county' placeholder = 'Enter County Name' style = 'height:40px'>
<br>
<input type = 'submit' value = 'submit' >
</form>