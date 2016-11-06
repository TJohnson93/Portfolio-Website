<?php
	$result = array('pass' => false, 'message' => 'No Message', 'debug_error' => 'No Error' );

	// Only process POST requests.
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Validate form fields.
		$values = $_POST;
		$name = trim(strip_tags($values['contact']['name']));
		$email = filter_var(trim(strip_tags($values['contact']['email'])), FILTER_SANITIZE_EMAIL);
		$phone = trim(strip_tags($_POST['contact']['phone']));
		$message = trim(strip_tags($_POST['contact']['message']));

		// ReCaptcha Validation
		// require('/path/to/recaptcha/src/autoload.php');
		// $recaptcha = new \ReCaptcha\ReCaptcha($secret);
		// $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
		// if ($resp->isSuccess()) {
		//     // verified!
		// } else {
		//     $errors = $resp->getErrorCodes();
		// }
		

		$captcha = $_POST['g-recaptcha-response'];
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcJtQoTAAAAAEWUefyQcuGut0eLRrs9g2YA7m4H&response=" . $captcha);
		$captchaResult = json_decode($response);

		
		// Further field validation
		if(empty($name) OR empty($message) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)){
			if($captchaResult->success == false){
				$result['pass'] = false;
				$result['message'] = 'Oops! There was a problem with your submission. Please complete the form and try again';
			}
		} else{		// Validation Passed... send email.
			require 'PHPMailer/PHPMailerAutoload.php';

			// Set Email settings
			$mail = new PHPMailer;
			$mail->isHTML(true);
			$mail->isSMTP(); 
			$mail->Host = 'mail.toddjohnson.com.au';    
			$mail->SMTPAuth = true;
			$mail->Username = 'me@toddjohnson.com.au';
			$mail->Password = 'Ang3l@2011';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 25;

			// Prepare Email Content
			$mail->From = $email;
			$mail->FromName = $name;
			$mail->addAddress('ToddAJohnson93@gmail.com', 'Todd Johnson');
			$mail->addReplyTo($email, $name);
			$mail->Subject = 'New message from: ' . $name;
			$mail->Body    = '<strong>Name: </strong>' . $name . '<br/>';
			$mail->Body   .= '<strong>Email: </strong>' . $email . '<br/><br/>';
			$mail->Body   .= '<strong>Phone: </strong>' . $phone . '<br/><br/>';
			$mail->Body   .= '<strong>Body: </strong> <br/>' . $message . '<br/>';

			// Attempt to send Email
			if(!$mail->send()) {
				$result['pass'] = false;
				$result['message'] = 'Message could not be Sent... <span style="font-size:0.75em;">
						(See developers console for details)</span>';
				$result['debug_error'] = 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$result['pass'] = true;
				$result['message'] = 'Message has been sent';
			}
		}
	} else {	// Not a POST request
		$result['pass'] = false;
		$result['message'] = 'There was a problem with your submission, please try again.';
	}

	echo json_encode($result);
?>