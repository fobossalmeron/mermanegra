<?php

require_once("../inc/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);


	if ($name == "" OR $email == "" OR $message == ""){
		$error_message = "You must specify a name, an email and a message.";
	}

	if (!isset($error_message)) {
		foreach($_POST as $value){
			if(stripos($value, 'Content-Type:') !== FALSE){
				$error_message = "There was a problem with the information you entered.";
			}
		}
	}

	if (!isset($error_message) && $_POST["address"] != "") {
		$error_message = "Your form submission has an error.";
	}

	require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)) {
			$error_message = "You must specify a valid email account.";
		}

		if (!isset($error_message)){
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body .  "Email: " . $email . "<br>";
		$email_body = $email_body .  "Message: " . $message;


		$mail->setFrom($email, $name);
		$mail->addReplyTo($email, $name);
		$mail->addAddress('contact@mermanegra.com', 'Gustavo Castellanos');
		$mail->Subject = 'Mermanegra Contact Form Submission |' . $name;
		$mail->msgHTML($email_body);

		if ($mail->send()) {
				header("Location: " . BASE_URL . "contact/?status=thanks");
				exit;
		} else {
		    $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
		}
	}
}
?>

<?php
	$pagetitle = 'Contact';
?>

<?php include(ROOT_PATH . 'inc/header.php'); ?>

<?php include(ROOT_PATH . 'inc/nav.php'); ?>

    <main>
     <div class="wrapper">
     <h2>Contact</h2>

     <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
	   <p>Your email has been sent successfully, you'll hear from us shortly</p>
     <?php } else { ?>

     <p>
    	<a href="mailto:contact@mermanegra.com">contact@mermanegra.com</a> <br>
	 	(+52 1)  55  4778  3748<br>
	 </p>

	 <div class="social">
		 <a class href="https://www.facebook.com/mermanegra" target="blank">
		 <img src="<?php echo BASE_URL . "images/fb.svg"?>">
		 </a>
   		 <a class href="http://instagram.com/mermanegra" target="blank">
		 <img class="social2" src="<?php echo BASE_URL . "images/instagram.svg"?>">
		 </a>
	</div>


	 <?php if (isset($error_message)){
	 	echo '<p class="errormessage">' . $error_message . '</p>';
	 	}
	 ?>

	 <form method="post" action="<?php echo BASE_URL;?>contact/">
	 	<table>
	 		<tr>
	 			<th>
		 			<label for="name">Name:</label>
	 			</th>
	 		</tr>
	 		<tr>
	 			<td data-th="Name">
	 				<input type="text" name="name" id="name" value="<?php if (isset($name)) {echo htmlspecialchars($name); } ?>">
	 			</td>
	 		</tr>

	 		<tr>
	 			<th>
		 			<label for="email">Email:</label>
	 			</th>
	 		</tr>
	 		<tr>
	 			<td data-th="Email">
	 				<input type="text" name="email" id="email" value="<?php if (isset($email)) {echo htmlspecialchars($email); } ?>">
	 			</td>
	 		</tr>

	 		<tr>
	 			<th>
		 			<label for="message">Message:</label>
	 			</th>
	 		</tr>
	 		<tr>
	 			<td data-th="Message">
	 				<textarea name="message" id="message"> <?php if(isset($message)) { echo htmlspecialchars($message); } else { echo htmlspecialchars(""); } ?> </textarea>
	 			</td>
	 		</tr>

	 		<tr style="display:none;">
	 			<th>
		 			<label for="address">Address:</label>
	 			</th>
	 			<td>
	 				<input type="text" name="address" id="address">
	 				<p>Humans: please leave the Address Field blank</p>
	 			</td>
	 		</tr>

	 	</table>
	 	<input class="button--primary sendbutton formbutton" type="submit" value="Send">

	 </form>

	<p class="credits">Website designed by <a class="bold" href="http://rodrigosalmeron.mx" target="blank">Rodrigo Salmerón</a>.</p>

	 <?php } ?>

     </div>
    </main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
