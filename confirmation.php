 <?php
 include('connect.php');
 include('header.php');
if(isset($_POST['search']) &&isset($_POST['checkin']) &&isset($_POST['checkout']) &&isset($_POST['rooms']) &&isset($_POST['persons'])){

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

			$query ="INSERT INTO Book(id, hotelname, indate, outdate, rooms , persons) VALUES ('','$hotelName', '$checkIn', '$checkOut', '$rooms', '$persons')";
			$query_run = mysql_query($query);
			if(!$query_run) {
				die('Query Could not be executed '.mysql_error());
				
		}
	}
	
}
?>
<h2 class = 'brandy'>Thank You your payment has been approved.Kindly check Your Email</h2>
<a href = 'Bootstrap/Hotel_Index.php' class = 'btn-primary btn-medium'>Home</a>
<?php include('footer.php');?>