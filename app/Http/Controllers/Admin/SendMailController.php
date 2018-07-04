<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Author;
use App\frontpageoption;
use App\Question;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class SendMailController extends Controller
{
    public static function noti_question_status_change($questions, $Auth){
    	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		    try {
		        //Server settings
		        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		        $mail->isSMTP();                                      // Set mailer to use SMTP
		        $mail->Host = 'smtp.123-reg.co.uk';  // Specify main and backup SMTP servers
		        $mail->SMTPAuth = true;                               // Enable SMTP authentication
		        $mail->Username = 'info@saddleworthlitfest.co.uk';                 // SMTP username
		        $mail->Password = 'Newuser2017?';                           // SMTP password
		        $mail->SMTPSecure = 'TLS';                           // Enable TLS encryption, `ssl` also accepted
		        $mail->Port = 587;                                    // TCP port to connect to
		        $styling = '';
		        //Recipients
		        $mail->setFrom('DoNotReply@saddleworthlitfest.co.uk', 'Saddleworth Literary Festival donotreply');
		        $mail->AddBCC($questions->email, $questions->name);              // Name is optional
		        //$mail->addReplyTo('info@x.com', 'x');

		        //Attachments
		        if($questions->status == 1)
		        {
		            $status = '<center><div style="text-align: center; background-color:#EEDADA; border:1px solid; border-color:#E6C6CC;color: #9F4256; padding: 10px; width: 50% !important; border-radius: 5px">Awaiting Review</div></center>';
		        }elseif($questions->status == 2)
		        {
		            $status = '<center><div style="text-align: center; background-color:#FAF8E0; border:1px solid; border-color:#F7E9C7;color: #916B3C; padding: 10px; width: 50% !important; border-radius: 5px; margin:10px">Being Reviewed</div></center>';
		        }elseif($questions->status == 3)
		        {
		            $status = '<center><div style="text-align: center; background-color:#DCEFD4; border:1px solid; border-color:#D2E7C0;color: #3B6E38; padding: 10px; width: 50% !important; border-radius: 5px; margin:10px">Reviewed</div></center> You will receive an answer soon!';
		        }else{
		            $status = '<div style="color:red; text-align: center">"error - unknown state"</div>';
		        }
		        
		        //Content
		        $mail->isHTML(true);                                  // Set email format to HTML
		        $mail->Subject = 'Question Status';
		        $mail->Body    = 'Hi there '.$questions->name.',<br> '.$Auth::user()->name.' has changed your questions status to:<br>
		        '.$status.' <br>We Will get back to you soon!
		        ';
		        $mail->AltBody = 'This email has been sent as a test to test our smtp server';

		        $mail->send();
		    } catch (Exception $e) {
		        dd('mail error - report to admin at ryanbpy1@gmail.com');
		    }
    }
}
