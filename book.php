
<?php 
include("header.php");
?>
	<div class='container-fluid'>
	<div class='row-fluid'>

		<div class='span3 offset6 well' style = 'margin-left:515px'>
		   <form action ='confirmation.php' method = 'post'>
			<div class='span12'>
			
			<input type = 'text' class = 'search-query' id = 'inputsrch' name = 'search' autocomplete = 'off' onkeyup="autoSuggest();" value = "<?php echo $_GET['name'];?>" disabled = 'disabled'>
			<input type = 'hidden' class = 'search-query' id = 'inputsrch' name = 'search' autocomplete = 'off' onkeyup="autoSuggest();" value = "<?php echo $_GET['name'];?>" >
			<div id = 'autosuggest-Container'></div>
			<hr>
			<label>Check In</label>
			<input type = 'text' name ='checkin' id = 'datepicker' required>
			<label>Check Out</label>
		    <input type = 'text' name ='checkout' id = 'datepicker2' required>
		    </div>
			<hr>
			<div class = 'span6' id = 'outerrooms'> 
				<div class = 'span6' id = 'rooms'>
				<label>Rooms</label>
				<select name = 'rooms' class = 'input-small' required>
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
				
				<div class = 'span6' id = 'persons' style = 'margin-left:5px'>
					<label>Persons</label>
					<select name = 'persons' class = 'input-small' required>
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
			<br>
			<br>
			<div>
			<input type = 'checkbox' value = 'Mpesa'/>Mpesa
				<br>
			<input type = 'checkbox' value = 'Mpesa'/>PesaPal
			</div>
		
			<input style = 'margin-top:90px' type = 'submit' name = 'submit' value = 'Book' class = 'btn btn-primary btn-medium'>
		</form>
	</div>
</div>

	

	</div>


<?php include 'footer.php';?>