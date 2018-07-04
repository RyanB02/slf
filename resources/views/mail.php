<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	//var
	$image = 'images/bg1.jpg';
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.123-reg.co.uk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@saddleworthlitfest.co.uk';                 // SMTP username
    $mail->Password = 'Newuser2017?';                           // SMTP password
    $mail->SMTPSecure = 'TLS';                           // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('DoNotReply@saddleworthlitfest.co.uk', 'Saddleworth Literary Festival donotreply');
    $mail->AddBCC('ryanbpy1@gmail.com', 'Ryan');              // Name is optional
    //$mail->addReplyTo('info@x.com', 'x');

    //Attachments
	$mail->addAttachment($image);
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This email has been sent as a test to test our smtp server';
    $mail->AltBody = 'This email has been sent as a test to test our smtp server';

    $mail->send();
    echo '
    	<link href="css/app.css" rel="stylesheet">
	    <div class="container">
		    <div class="panel panel-default">
			    <div class="panel-heading">
			    	Mail Sent!
			    </div>
			    <div class="panel-body">
			    	No errors to show, mail has been sent
			    	<br>
			    	Image sent:
			    	<img src="'.$image.'" style="width:100%">
			    </div>
		    </div>
	    </div>
    ';
} catch (Exception $e) {
    echo '
    	<link href="css/app.css" rel="stylesheet">
	    <div class="container">
		    <div class="panel panel-default">
			    <div class="panel-heading">
			    	Error!
			    </div>
			    <div class="panel-body">
			    	Mailer Error: ' . $mail->ErrorInfo;'
			    </div>
		    </div>
	    </div>
    ';
}