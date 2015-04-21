<?php 

include 'config.php';

 
if(isset($_POST['attraction'], $_POST['distance'], $_POST['location'], $_POST['description']))
{
$attraction = $_POST['attraction'];
$distance = $_POST['distance'];
$location = $_POST['location'];
$description = $_POST['description'];

	
	$agent_query = "INSERT INTO Signup(Location, Distance, Attraction, Description) VALUES ('$location','$distance','$attraction','$description')";
	$agent_query_run = mysql_query($agent_query);
}
?>





<?php include 'header.php';?>


<div class = 'container'>
<div class = 'row'>
<form name = 'content' action = 'agent_content.php' method = 'post' role = 'form'>
<input type = 'text' name = 'attraction' placeholder = 'Closest Attraction/s' style = 'height:40'>
<input type = 'text' name = 'distance' placeholder = 'Distance From Attraction' style = 'height:40'><br>
<input type = 'text' name = 'location' placeholder = 'Hotel Location' style = 'height:40'><br>
<textarea name = 'description' placeholder = 'Description of Hotel' cols = '30' rows = '7'></textarea><br>
<input type = 'submit' name = 'submit' value = 'Submit' class = 'btn btn-primary btn-medium'>
</form>
</div>
</div>