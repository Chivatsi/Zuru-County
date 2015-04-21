 <?php
 include('connect.php');
 include("header.php");
$check = $fields = $status = "";

if(isset($_POST['search']) && isset($_POST['checkin']) && isset($_POST['checkout'])  && isset($_POST['rooms']) && isset($_POST['persons']))
{
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

			$query = ("INSERT INTO Book(hotelname, indate, outdate, rooms , persons) VALUES ('$hotelName', '$checkIn', '$checkOut', '$rooms', '$persons')");
			$query_run = mysql_query($query);
			if($query_run)
			{
				$status = '<p style = "color:green">Thank you for your booking</p>';
			}
			else
			{
				echo "not entered";
			}

		 }else{

		$check = '<p style="color:red;">The check out date must be greater than the check in day</p>';
			
		}
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
	
	<a href = 'agent_signup.php' style = 'text-decoration:none' class = 'pull-right'>Register Your Hotel</a>
	</div>	

	<div class='container'>
	<div class='row-fluid'>

	<a href = 'counties.php' class = 'btn btn-primary btn-large'>Explore Your County</a>
	</div>
	</div>

	
	<div class='container-fluid'>
	<div class='row-fluid'>

		<div class='span3 offset8 well' style = 'margin-left:915px'>
		   <form action ='Hotel_Index.php' method = 'post'>
			<div class='span12'>
			
			<?php echo $check; 
				echo $fields;
				echo $status;
			?>
			
			<input type = 'text' id='liveHotelName' name = 'search' autocomplete = 'off' style = 'height:30px' onkeyup="searchq();" placeholder = 'Hotel Search'>
			<div id  = 'output' style= 'background-color:#fff; width:200px'></div>	
			<hr>
			<input type = 'text' name ='checkin' id = 'datepicker' placeholder = 'Check In Date' required>
			&nbsp;&nbsp;&nbsp;
		    <input type = 'text' name ='checkout' id = 'datepicker2' placeholder = 'Check Out Date' required>
		    </div>
			<hr>
			<div id = 'outerrooms'> 
				<select name = 'rooms' class = 'input-large'>
					<option value = 'Rooms'>Number of Rooms</option>
					<option value = '1'>1</option>
					<option value = '2'>2</option>
					<option value = '3'>3</option>
					<option value = '4'>4</option>
					<option value = '5'>5</option>
					<option value = '6'>6</option>
					<option value = '7'>7</option>
					<option value = '8'>8</option>
					<option value = '9'>9</option>
					<option value = '10'>10</option>
				</select>
		
				&nbsp;&nbsp;&nbsp;
				<select name = 'persons' class = 'input-large'>
					<option value = 'Persons'>Persons Booking In</option>
					<option value = '1'>1</option>
					<option value = '2'>2</option>
					<option value = '3'>3</option>
					<option value = '4'>4</option>
					<option value = '5'>5</option>
					<option value = '6'>6</option>
					<option value = '7'>7</option>
					<option value = '8'>8</option>
					<option value = '9'>9</option>
					<option value = '10'>10</option>
				</select>

			</div>
			<div>
			<input type = 'checkbox' value = 'Mpesa'/>Mpesa
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'checkbox' value = 'Mpesa'/>PesaPal
			</div>
			<br>
			<input href = 'confirmation.php' type = 'submit' name = 'submit' value = 'Reserve Room' class = 'btn btn-primary btn-medium'>
		</form>
		</div>
	</div>

</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.ajaxHotelName').live('click', function(){
			var newHotelName = $(this).attr('href');
			
			$('#liveHotelName').attr('value', newHotelName);
			$('#output').hide();

			return false;
		});

	});
</script>





		
<?php include 'footer.php';?>