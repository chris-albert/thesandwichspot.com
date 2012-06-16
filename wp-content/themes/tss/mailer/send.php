<?php
function sendEmail($sub){	
	$to = "rbecijos@gmail.com";
	$subject = "Form Submitted - The Sandwich Spot Corporate ";
	$body = "Time: " . date("F j, Y, g:i a") . "\r\n\r\n";
	$body.= "Details: \r\n===================\r\n";
	$body.= 'Name: ' . $sub['name'] ."\r\n";
	$body.= 'Email: ' . $sub['email'] ."\r\n";
	if($sub['daycon'])
		$body.= 'Daytime Phone: ' . $sub['daycon'] ."\r\n";	
	if($sub['cell'])
		$body.= 'CellPhone: ' . $sub['cell'] ."\r\n";	
	if($sub['address'])
		$body.= 'Address: ' . $sub['address'] ."\r\n";	
	if($sub['city'])
		$body.= 'City: ' . $sub['city'] ."\r\n";	
	if($sub['state'])
		$body.= 'State: ' . $sub['state'] ."\r\n";	
	if($sub['zip'])
		$body.= 'Zip: ' . $sub['zip'] ."\r\n";			
	$body .= 'Note: Auto response sent to '. $sub['email'] ."\r\n\r\n";
	$body .= $sub['message'] . " \r\n";
	$body .= "\r\n";	
	// To send HTML mail, the Content-type header must be set	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
	// Additional headers	
	$headers .= 'To: '. $to . "\r\n";
	$headers .= 'From: thesandwichspot.com <do_not_reply@thesandwichspot.com>\r\n';
	//$headers .= 'X-Mailer: PHP/' . phpversion();	
	
	//print_r($body);
	$res = mail($to, $subject, $body, $headers);
	
	
	return $res;
}


function sendResponseEmail($email,$name){	
	$to = $email;
	$subject = "Thank You From - The Sandwich Spot";
	$body = '';
	$body .= "Hello ".$name . '<br/>';
    $body .= '<p>I would like to thank you for your interest in The Sandwich Spot®. You’re just making the first steps on/to your Road to Success. This unique, rewarding and profitable business model will fulfill your life with joy, pride and of course $$ great money $$.</p>'; 
    $body .= '<p>We created a proven business System that will show you the path to build your own The Sandwich Spot ® and avoid costly mistakes that many shops in the Food industry unfortunately make.</p>';
	$body .= '<p>Please allow 48-72 hours for us to respond to your inquiry.</p>';
	$body .= '<p>Tom Heally<br/>';	
	$body .= 'Founder<br/>';
	$body .= 'The Sandwich Spot®</p>';
	$body .= "";	
	// To send HTML mail, the Content-type header must be set	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Additional headers	
	$headers .= 'To: '. $to . "\r\n";
	$headers .= 'From: thesandwichspot.com <do_not_reply@thesandwichspot.com>\r\n';
	//$headers .= "X-Mailer: php";	
	return mail($to, $subject, $body, $headers);
}


if($_POST['e-name']){
		$res = true;
		$submission = array(
			'name' => $_POST['e-name'],
			'email' => $_POST['e-email'],
			'message' => $_POST['e-message'],
			'cell' => $_POST['e-cell'],
			'daycon' => $_POST['e-daycon'],
			'address' => $_POST['e-address'],
			'city' => $_POST['e-city'],
			'state' => $_POST['e-state'],
			'zip' => $_POST['e-zip'],
			'h-fr' => $_POST['h-fr'],
		);

		$res = sendEmail($submission);
		
		
		// If they are interested about the franchise talk, email the auto responder
		if($_POST['h-fr']){
			$res2 = sendResponseEmail($_POST['e-email'],$_POST['e-name']);
		}
		if($res) echo "SUCCESS";
		else echo "FAIL";
}else{	
	echo "FAIL";
}

die();

?>