<?php

	require_once('connect.php');

	if(isset($_POST['pass1'], $_POST['username']))
	{
		$password = $_POST['pass1'];
		$username = $_POST['username'];

		if(!empty($password) && !empty($username))
		{
			$password = md5($password);

			//query db
			$login_query = "SELECT Username FROM Sign_Up WHERE Password = '$password' AND Username = '$username'";
			$login_query_run = mysql_query($login_query);

			if($login_query_run)
			{
				//rows returned
				$num_rows = mysql_num_rows($login_query_run);

				if($num_rows === 0)
				{
					$error =  "<p style = 'margin-left:40px;color:red'>"."Wrong login details"."</p>";
				}
				elseif($num_rows === 1)
				{
					session_start();
					$agent_id = mysql_result($login_query_run, 0, 'Username');
					$_SESSION['Username'] = $agent_id;
				    
					header('Location: hotel_details.php');
				}
			}
			else
			{
				$error = "Query failed";
			}

		}
		else
		{
			$error = "All fields are required";
		}
	}

mysql_close($connect);
?>


 <style type="text/css">
		   
		      .form-signin {
		        max-width: 300px;
		        padding: 19px 29px 29px;
		        margin: 0 auto 20px;
				margin-top:100px;
		        /*background-color: gray;*/
		        border: 1px solid #e5e5e5;
		        -webkit-border-radius: 5px;
		           -moz-border-radius: 5px;
		                border-radius: 5px;
		        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		                box-shadow: 0 1px 2px rgba(0,0,0,.05);
		      }
		      .form-signin .form-signin-heading,
		      .form-signin .checkbox {
		        margin-bottom: 10px;
		      }
		      .form-signin input[type="text"],
		      .form-signin input[type="password"] {
		        font-size: 16px;
		        height: auto;
		        margin-bottom: 15px;
		        margin-left: 40px;
		        padding: 7px 9px;
		      }
		      .form-signin input[type="submit"]{ 
		        font-size: 16px;
		        height: auto;
		        margin-bottom: 15px;
		        margin-left: 100px;
		        

		      } 

	body{
		background-image: url('bootstrap/img/Girrafe_BG.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
    </style>

		 

<?php include 'header.php';?>

<div class = 'container'>
	<div class = 'row'>
		<div class = 'span12' >
		<div class = 'span6 offset4 form-signin well'>
		<form action = 'agent_login.php' method = 'POST' role = 'form'/>

		<div><?php if(isset($error))echo $error; ?></div>

		<img src = ''>
		<input type = 'text' name = 'username' placeholder = 'Enter User Name' style = 'height:40px' required/><br><br>
		<input type = 'password' name = 'pass1' placeholder = 'Enter User Password' required/><br><br>
		<input type = 'submit' name = 'submit' class = 'btn btn-primary btn-medium' /><br><br>
		<a href = 'agent_signup.php' class = 'btn btn-primary btn-medium' style = 'margin-left:50px'>Create New Account</a>
		
		</form>
		</div>
		</div>
	</div>
</div>
<?include('footer.php');?>
