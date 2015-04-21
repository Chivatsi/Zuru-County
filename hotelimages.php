<?php include('connect.php');

if(isset($_POST['hotelname']) && isset($_POST['images']))
{
	$hotelname = $_POST['hotelname'];
	$images = $_POST['images'];

	if (!empty($hotelname) && !empty($images)) {
		
		$query = "INSERT INTO Hotel_Images(Hotel_Image, Hotel_Name) VALUES ('$images' ,'$hotelname')";
		$query_run = mysql_query($query);
		if ($query_run) {
			echo 'success';
		}
		else{
			echo 'no success';
		}
	}
}
?>



<?php include('header.php'); ?>
<div class = 'container'>
	<form name = 'hotelimages' role = 'form' method = 'post'>
	<input type = 'text' name = 'hotelname' style = 'height:40px' placeholder = 'Enter Hotel Name'>
	<br>
	<input type = 'file' name = 'images'>
	<br>
	<input type = 'submit' value = 'Upload Images' class = 'btn btn-primary btn-medium'>
	</form>
</div>



<?php include('footer.php');?>