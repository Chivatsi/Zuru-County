<?php 
include ('connect.php');
$feedback = '';
 session_start();
 include 'header.php';

 if(isset($_SESSION['Username']) && !empty($_SESSION['Username'])){
 	$name=$_SESSION['Username'];

 	print("<div class = 'container'>");
 	print("<h5>".'Welcome, '.$name."</h5>");

 	$result = "SELECT Images FROM Sign_Up WHERE Username = '$name'";
 	$res=mysql_query($result, $connect);
 	if ($res) {
 		$count = mysql_num_rows($res);
 		if ($count > 0) {
 			$rows = mysql_fetch_array($res);

 			$imagename = $rows['Images'];

 			print("<img src = 'bootstrap/img/$imagename' class='img-polaroid' height='120' width='120'> ");
			
		}
 		elseif($count == 0){

 			print("No Picture Uploded");
 		}
 	}
 	else{

 		print("Details Not Available".mysql_error());
 	}
 }
 elseif (!isset($_SESSION['Username']) && empty($_SESSION['Username'])) {
 	header("Location:agent_login.php");
 }
 ?>

 <?php include('connect.php');
 print("</div>");

if(isset($_POST['hotelname']) && isset($_POST['location']) && isset($_POST['email']) 
	&& isset($_POST['telephone']) && isset($_POST['services']) && isset($_POST['postal']) 
	&& isset($_POST['attraction']) && isset($_POST['distance']) && isset($_POST['prices']) 
	&& isset($_POST['county']) &&isset($_POST['images']))
{
	$hotelname = $_POST['hotelname'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$services = $_POST['services'];
	$postal = $_POST['postal'];
	$attraction = $_POST['attraction'];
	$distance = $_POST['distance'];
	$prices = $_POST['prices'];
	$county = $_POST['county'];
	$images = $_POST['images'];

	if(!empty($hotelname) && !empty($location) && !empty($email) && !empty($services) && !empty($attraction) && !empty($distance) && !empty($prices) && !empty($county) &&!empty($images))
	{
		$query = "INSERT INTO Hotel_Details(Hotel_Name, Location, Email, Telephone, Services, County, Prices, Attraction, Distance, Postal, Hotel_Image) VALUES
				 ('$hotelname','$location','$email','$telephone','$services','$county', '$prices' ,'$attraction','$distance','$postal','$images')";
		
		$query_run = mysql_query($query);

		if($query_run)
			{
				$feedback =  "<h6 style = 'color:green;'>Successfull Hotel Registration</h6>"; 

			}
			else{
				$feedback = "<h6 style = 'color:green;'>Unsuccessfull Hotel Registration</h6>";
			}
	}
	else
	{
		print('Fill in all the fields');

	}

}
?>
<style>
	a:link {color:white;}
	a:visited {color:white;}
	a:hover {color:black;}
	a:active {color:white;}

	body{
		background-image: url('bootstrap/img/Girrafe_BG.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}

	</style>
<div class = 'container'>
	<div class = 'row'>	
	<div class = 'span12' style = 'margin-top:-180px'>
		<div class = 'span7 offset2 well'>
			<?php echo $feedback;?>
			<form action = 'hotel_details.php' method = 'post' role = 'form'/>
				<input type = 'text' name = 'hotelname' style = 'height:40px' placeholder = 'Enter Hotel Name' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'text' name = 'location' style = 'height:40px' placeholder = 'Enter Hotel Location' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'text' name = 'email' style = 'height:40px' placeholder = 'Enter Hotel Email Address' required/>
				<hr>
				<input type = 'text' name = 'telephone' maxlength="10" placeholder = 'Enter Hotel Tel Number' style = 'margin-top:-110px;height:40px'/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea name = 'services' cols = '30' rows = '7' placeholder = 'Enter Services Offered' required></textarea>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'text' name = 'postal' placeholder = 'Enter Postal Address' style = 'margin-top:-80px; height:40px'/>
				<input type = 'text' name = 'attraction' placeholder = 'Enter Nearest Attraction' style = 'margin-top:-290px; margin-left:250px;height:40px' required/>
				<input type = 'text' name = 'distance' placeholder = 'Enter Dist From Att' style = 'margin-top:-75px; margin-left:460px; height:40px' required/>
				<hr>
				<input type = 'text' name = 'prices' placeholder = 'Enter Price/Room' style = 'height:40px' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php 
						include 'connect.php';

						$result = "SELECT *FROM County_Images";

						$res = mysql_query($result , $connect);
						if ($res) {
							$count = mysql_num_rows($res);
							if ($count > 0) {
								print("<select name = 'county'>");
								while ($rows = mysql_fetch_array($res)) {
								
								
									print("<option value = '{$rows['County']}'>{$rows['County']}"."</option>");
								}
								print("</select>");	

								
						}
					}
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'file' accept = 'image/*' name = 'images' style = 'margin-top:-40px; margin-left:500px; height:40px' >
				<br>
				<input type = 'submit' value = 'Register Hotel' name = 'submit' class = 'btn btn-primary btn-medium' style = 'width:230px; margin-top:17px; margin-left:220px; height:30px'/>
			</form>
		</div>
	</div>
	</div>
<a href = 'logout.php' class = 'btn btn-primary pull-right'>Logout</a>

<a href = 'agent_login.php' class = 'btn btn-primary pull-right'>Log In</a>
</div>

?>
<?php include 'footer.php';?>
