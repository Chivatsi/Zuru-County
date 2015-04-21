<?php
include ('connect.php');
include ('header.php');

if(isset($_POST['images']) &&isset($_POST['attraction']) &&isset($_POST['counties']) &&isset($_POST['description']) &&isset($_POST['directions']))
{
	$images = $_POST['images'];
	$attraction = mysql_real_escape_string($_POST['attraction']);
	$counties = mysql_real_escape_string($_POST['counties']);
	$description = mysql_real_escape_string($_POST['description']);
	$directions = mysql_real_escape_string($_POST['directions']);

	if(!empty($images) &&!empty($attraction) &&!empty($counties) &&!empty($description) &&!empty($directions))
	{
		$query = "INSERT INTO Attraction_Name(Attraction_Image, Attraction_Name, County, Description, Directions) VALUES('$images','$attraction','$counties','$description','$directions')";
		$query_run = mysql_query($query);

		if($query_run){

			echo 'YEss!';
		}
		else{
			echo 'Nini bana?';
		}
	}
}
?>

<div class = 'container'>
<div class = 'span6 offset4'>
<form action = 'fillattraction.php' method = 'post' role = 'form' >

<input type = 'file' name = 'images'><br>
<input type = 'text' name = 'attraction' placeholder = 'Enter Attraction Name' style = 'height:40px'><br>
<?php 
include 'connect.php';

$result = "SELECT *FROM County_Images";

$res = mysql_query($result , $connect);
if ($res) {
	$count = mysql_num_rows($res);
	if ($count > 0) {
		print("<select name = 'counties'>");
		while ($rows = mysql_fetch_array($res)) {
		
		
			print("<option value = '{$rows['County']}'>{$rows['County']}"."</option>");
		}
		print("</select>");	

		
	}
}
?>
<br>
<textarea name = 'description' cols = '50' rows = '7' placeholder = 'Enter Attraction Description'></textarea>
<br>
<input type = 'text' name = 'directions' placeholder = 'Directions to Attraction'/>
<br>
<input type = 'submit' value = 'submit' >
</form>
<?include ('footer.php');?>