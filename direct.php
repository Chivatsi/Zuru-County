<?php
$page = 'direct';
 include('config.php');


$check = $fields = "";
if (isset($_POST['submit'])) {

	$hotelName = $_POST['search'];
	$checkIn = $_POST['checkin'];
	$checkOut = $_POST['checkout'];
	$rooms = $_POST['rooms'];
	$persons = $_POST['persons'];

	if(empty($hotelName) && empty($checkIn) && empty($checkOut) && empty($rooms) && empty($persons))
	{
		$fields = 'Fill in all the fields';
		
	}
	else{

	$checkInTime = strtotime($checkIn);
	$checkOutTime = strtotime($checkOut);

		if ($checkOutTime >= $checkInTime) {

			$hotelName = mysql_escape_string($_POST['search']);
			$checkIn = mysql_escape_string($_POST['checkin']);
			$checkOut = mysql_escape_string($_POST['checkout']);
			$rooms = mysql_escape_string($_POST['rooms']);
			$persons = mysql_escape_string($_POST['persons']);

			mysql_query("INSERT INTO BookRoom(hotelname, indate, outdate, rooms , persons) VALUES ('$hotelName', '$checkIn', '$checkOut', '$rooms', '$persons')");


		}else{

			$check = '<p style="color:red;">The check out date must be greater than the check in day</p>';
			
		}

	}
}
?>

<?php include('header.php');?>



		
		
<?php include("footer.php");?>

