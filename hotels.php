<?php 

include('connect.php');
include('header.php');

$result = "SELECT * FROM Hotel_Details WHERE Attraction = '{$_GET['name']}'";
$res=mysql_query($result, $connect);
 	if ($res) {
 		$count = mysql_num_rows($res);
 		if ($count > 0) {

 			while ( $rows = mysql_fetch_array($res)) {
 				print("<div class = 'container'>");
 				print("<div class = 'span12'>");
				print("<img src = 'bootstrap/img/{$rows['Hotel_Image']}' class='img-polaroid' height='200' width='200'> ");
 				print("<div style = 'margin-left:250px; margin-top:-160px;'>");
	 			print("<h2>"."<a style = 'text-decoration:none' href = 'fulldetails.php?name={$rows['Hotel_Name']}'>{$rows['Hotel_Name']}</a>"."</h2>");
	 			print("<h4>"."{$rows['Location']}"."</h4>");
	 			print("</div>");
	 			print("<div style = 'margin-left:700px; margin-top:-70px;'>");
	 			print("<h4>{$rows['Prices']}</h4>"."<h5 style = 'color:gray'>per night</h5>");
	 			print("<br>");
	 			print("<h4>{$rows['Distance']}</h4>"."<h5 style = 'color:gray'>from attraction</h5>");
	 			print("</div>");
	 			print("<div style = 'margin-left:250px; margin-top:-40px;'>");
	 			print("<p>"."<a style = 'text-decoration:none' href = 'book.php?name={$rows['Hotel_Name']}' class = 'btn-primary btn-large' data-toggle='modal'>Reserve Room</a>"."</p>");
	 			print("</div>");
	 			print("<br>");
	 			print("<hr>");
	 			print("</div>");
	 			print("</div>");
	 			$hotel=$rows['Hotel_Name'];
				}
			}
	 		elseif($count == 0){

	 			print("No Details Available Yet");
 		}
 	}
 ?>
<!--  <section id = "launch" class = "modal hide fade"> 

				<header class = 'modal-header'>
				<h3 style = 'margin-left:140px'>Reserve Room</h3>
				</header>
				<div class = 'modal-body' id = 'content'>
				<form action ='confirmation.php' method = 'post'>
				<div>

			
			<input type = 'text' style = 'margin-left:120px'class = 'search-query' id = 'inputsrch' name = 'search' autocomplete = 'off' value = "<?php echo $hotel ?>" disabled = 'disabled'>
			<input type = 'hidden' class = 'search-query' id = 'inputsrch' name = 'search' autocomplete = 'off' value = "<?php echo $hotel ;?>" >
			<div id = 'autosuggest-Container'></div>
			<hr>
		
			<input type = 'text' name ='checkin' id = 'datepicker' required placeholder = 'Check In Date'>
			&nbsp;&nbsp;&nbsp;
		    <input type = 'text' name ='checkout' id = 'datepicker2' required placeholder = 'Check Out Date'>
		 	 <hr>
		    </div>
		
			<div id = 'outerrooms'> 
				<select name = 'rooms' class = 'input-large' required>
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
				<select name = 'persons' class = 'input-large' required>
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
				
			</div>
			<input type = 'submit' name = 'submit' value = 'Complete Reservation' class = 'btn btn-primary btn-medium' style = 'margin-left:170px'>
			
		</form>
				</div>
					
						  
			<footer class = 'modal-footer'>
				<a class = 'btn btn-primary' data-dismiss = 'modal'>Close</a>
			</footer>	
	</section> -->
 <?php include 'footer.php';?>