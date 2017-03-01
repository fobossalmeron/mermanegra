<?php

require_once("../../inc/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);


	if ($name == "" OR $email == "" OR $message == ""){
		$error_message = "Debes escribir un nombre, un email y un mensaje.";
	}

	if (!isset($error_message)) {
		foreach($_POST as $value){
			if(stripos($value, 'Content-Type:') !== FALSE){
				$error_message = "Hubo un problema con la solicitud de envío.";
			}
		}
	}

	if (!isset($error_message) && $_POST["address"] != "") {
		$error_message = "Hay un error en la información introducida.";
	}

	require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)) {
			$error_message = "Debes introducir una dirección de correo válida.";
		}

		if (!isset($error_message)){
		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body .  "Email: " . $email . "<br>";
		$email_body = $email_body .  "Message: " . $message;


		$mail->setFrom($email, $name);
		$mail->addReplyTo($email, $name);
		$mail->addAddress('contact@mermanegra.com', 'Gustavo Castellanos');
		$mail->Subject = 'Merma Negra Contact Form Submission |' . $name;
		$mail->msgHTML($email_body);

		if ($mail->send()) {
				header("Location: " . BASE_URL . "es/contacto/?status=gracias");
				exit;
		} else {
		    $error_message = "Hubo un problema enviando el email: " . $mail->ErrorInfo;
		}
	}
}
?>

<?php
	$pagetitle = 'Contacto';
?>

<?php include(ROOT_PATH . 'inc/es/header.php'); ?>

<?php include(ROOT_PATH . 'inc/es/nav.php'); ?>

    <main>
     <div class="wrapper">
     <h2>Contacto</h2>

     <?php if (isset($_GET["status"]) AND $_GET["status"] == "gracias") { ?>
	   <p>Tu email ha sido enviado, te contactaremos a la brevedad.</p>
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

	 <form method="post" action="<?php echo BASE_URL;?>es/contacto/">
	 	<table>
	 		<tr>
	 			<th>
		 			<label for="name">Nombre:</label>
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
		 			<label for="message">Mensaje:</label>
	 			</th>
	 		</tr>
	 		<tr>
	 			<td data-th="Message">
	 				<textarea name="message" id="message"> <?php if(isset($message)) { echo htmlspecialchars($message); } else { echo htmlspecialchars(""); } ?> </textarea>
	 			</td>
	 		</tr>

	 		<tr style="display:none;">
	 			<th>
		 			<label for="address">Dirección:</label>
	 			</th>
	 			<td>
	 				<input type="text" name="address" id="address">
	 				<p>Humanos: dejar el espacio de Dirección en blanco</p>
	 			</td>
	 		</tr>

	 	</table>
	 	<input class="button--primary sendbutton formbutton" type="submit" value="Enviar">

	 </form>

	<p class="credits">Sitio diseñado y desarrollado por <a class="bold" href="http://rodrigosalmeron.mx" target="blank">Rodrigo Salmerón</a>.</p>

	 <?php } ?>

     </div>
    </main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
