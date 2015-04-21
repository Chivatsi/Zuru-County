<!DOCTYPE>
<?php include 'header.php';?>

		<br><br><br><br>
		<div class = "span5 offset5">
        <form class="contact" name="contact" action = "contact.php" method = "POST">
            <label class="label" for="name">Your Name*</label><br>
            <input type="text" name="name" class="input-xlarge" required><br>
            <label class="label" for="email">Your Email*</label><br>
            <input type="email" name="email" class="input-xlarge" required><br>
            <label class="label" for="subject">Subject*</label><br>
            <input type="text" name="subject" class="input-xlarge" required><br>
            <label class="label" for="message">Enter a Message*</label><br>
            <textarea name="message" class="input-xlarge"></textarea><br>
        	<input class="btn btn-primary" type="submit" value="Send Message" id="submit">
        	<a href="#" class="btn" data-dismiss="modal">Cancel</a>
        </form>
    </div>

<?php 
	if (!isset($_POST["submit"]))
	{
		die();
	}	
   else
  // the user has submitted the form
  {
  // Check if the "from" input field is filled out
  if (isset($_POST["submit"]))
    {
    $name = $_POST["name"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = 'dennischivatsi@gmail.com';
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($to,$subject,$message,"From: $name\n");
    echo "Thank you for sending us feedback";
    }
  }
?> 

<?php include 'footer.php';?>