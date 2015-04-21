'<?php 
include ('header.php') ;
include ('connect.php');
$success = '';

if(isset($_POST['username']) && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['telephone']) && isset($_POST['postal']) && isset($_POST['images']) && isset($_POST['email']))
{
$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$telephone = $_POST['telephone'];
$postal = $_POST['postal'];
$images = $_POST['images'];
$email = $_POST['email'];

	if(!empty($username) && !empty($pass1) && !empty($pass2) && !empty($email) && !empty($telephone) && !empty($postal) && !empty($images))
	{

				if($pass1 != $pass2)
				{
					echo 'Passwords do not match';
  				}
				else
				{
					$pass1=md5($pass1);
					$pass2=md5($pass2);

				 	$query = "INSERT INTO Sign_Up(Username, Password, Tel_Number, Email, Postal_Add, Images) VALUES ('$username' , '$pass1' , '$telephone', '$email','$postal', '$images')";
					$check = mysql_query($query);

					if($check){

						$success = "<h6 style = 'color:green;'>Successfull Sign Up</h6>";
					}
					else{
						$success = "<h6 style = 'color:red;'>Unsuccessfull Sign Up, Please Sign Up again</h6>";
					}

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
	<div class = 'row'>
	<div class = 'span12' >
		<div class = 'span6 offset3 well'>
		<?php echo $success;?>
			<form action = 'agent_signup.php' method = 'post' role = 'form'/>
				<input type = 'text' name = 'username' style = 'margin-left:180px; height:40px' placeholder = 'Enter User Name' required/>
				<hr>
				<input type = 'password' name = 'pass1' style = 'height:40px' placeholder = 'Enter Password' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'password' name = 'pass2' style = 'margin-left:120px; height:40px' placeholder = 'Confirm Password' required/>
				<hr>
				<input type = 'text' name = 'telephone' placeholder = 'Enter Telephone Number' maxlength = '10'style = 'height:40px' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'text' name = 'email' placeholder = 'Enter Email Address' style = 'margin-left:120px; height:40px' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				<input type = 'text' name = 'postal' placeholder = 'Enter Postal Address' style = 'height:40px' required/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = 'file' title="Search for an image to add" name = 'images' style = 'margin-left:360px;margin-top:-40px;height:40px' required/> 
				<hr>
				<input type = 'submit' value = 'Sign Up' name = 'submit' class = 'btn btn-primary btn-medium '/>
				<a href = 'agent_login.php' class = 'btn btn-primary btn-medium  btn pull-right'>Log In</a>
			</form>
		</div>
	</div>
	</div>
</div>
<?php include 'footer.php';?>