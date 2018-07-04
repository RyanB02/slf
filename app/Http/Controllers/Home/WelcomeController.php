<?php

namespace App\Http\Controllers\Home;

use App\Author;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use FastSMS\Model\Message;
use FastSMS\Client;
use Illuminate\Support\Facades\Input;
use FastSMS\Exception\ApiException;
use Session;

class WelcomeController extends Controller
{

/*    public function captchaCheck()
    {

        $response = Input::get('g-recaptcha-response');
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = env('RE_CAP_SECRET');

        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response, $remoteip);
        if ($resp->isSuccess()) {
            return 1;
        } else {
            return 0;
        }

    }*/
	//WELCOME PAGE FUNCTIONS
		public function renderHome()
		{
			return view('welcome');
		}

		public function postContactFromHome(Request $request)
		{
			$validator = Validator::make($request->all(), [
		        'name' => 'required|max:50',
		        'email' => 'required|max:50',
		        'mobile' => 'max:50',
		        'message' => 'required',
		    ]);

		    if ($validator->fails()) {
		        return redirect('/contact')->withErrors($validator)->withInput();
		    }

		    $token = $request->input('g-recaptcha-response');
		    if($token == null){
		    	return redirect('/contact')->withErrors('Please complete the reCaptcha!')->withInput();
		    }else{
		    	$questions = new Question;
			    $questions->name = $request->name;
			    $questions->email = $request->email;
			    $questions->message = $request->message;
			    $questions->save();
			   	//mailing
			    // Multiple recipients
			    $to = 'ryanbpy1@gmail.com, ryan@saddleworthlitfest.co.uk'; // note the comma
			    // Subject
			    $subject = 'Contact Form Submission '.$questions->id;
			    //defining variables for info
			    $name = $questions->name;
			    $email = $questions->email;
			    $msg = $questions->message;
			    // Message
			    $message = '
			    <html>
				    <body>
					      <p>'.$name.' has sent a message!</p>\
					      <p>Name: '.$name.'</p>\
					      <p>Email: '.$email.'</p>\
					      <p>Message: "'.$msg.'"</p>\
				    </body>
			    </html>
			    ';

			    // To send HTML mail, the Content-type header must be set
			    $headers[] = 'MIME-Version: 1.0';
			    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

			    // Additional headers
			    $headers[] = 'To: Admins';
			    $headers[] = 'From: SLF Admin <info@saddleworthlitfest.co.uk>';

			    // Mail it
			    mail($to, $subject, $message, implode("\r\n", $headers));
			    //mail over
			    Session::flash('sent', "Question sent, expect a response within 24 hours!");
			    return redirect('/');
		    }

// 		    $client = new Client('1AAy-L8Er-LHvh-ZAcQ');
// 			try {
// 				$FastSMS = new Client('1AAy-L8Er-LHvh-ZAcQ');
// 			    // Init Message data
// 				$data = [
// 				    //set
// 				    'destinationAddress' => $request->mobile,

// 				    'sourceAddress' => 'SLF',
// 				    'body' => 'Hi there '.$questions->name.',
// We have received your contact submission and we will be in touch soon!

// -Saddleworth Literary Festival', //Note: max 459 characters
// 				    //optionals
// 				    //'validityPeriod' => 3600 * 6, //maximum 86400 = 24 hours
// 				    //'sourceTON' => 1, //The Type Of Number for the source address (1 for international, 5 for alphanumeric)
// 				];
// 				$result = $client->message->send($data);
// 			} catch (ApiException $aex) {
// 			    dd( 'API error #' . $aex->getCode() . ': ' . $aex->getMessage());
// 			} catch (Exception $ex) {
// 			    dd( $ex->getMessage());
// 			}



		}
	//ABOUT PAGE FUNCTIONS
		public function renderAbout()
		{
			return view("welcome_partials.about");
		}
		
	//UPCOMING PAGE FUNCTIONS
		public function renderUpcoming()
		{
			return view("welcome_partials.upcoming");
		}
	//GUEST PAGE FUNCTIONS
		public function renderGuests()
		{
			return view("welcome_partials.guests");
		}

		public function renderGuestsIndiv($id)
		{
			$last = Author::count();
			$test = request()->route('id');
			if($test <= $last){
				$guest = Author::find($test);

				return view("welcome_partials.guest_indiv")->with('guest', $guest);
			}else{
				abort(404);
			}	
		}

	//FEATURING PAGE FUNCTIONS
		public function renderFeaturing()
		{
			return view("welcome_partials.featuring");
		}


	//CONTACT PAGE FUNCTIONS
		// Getting view, no data is pulled
		public function renderContact()
		{
			return view('welcome_partials.contact');
		}
		// posting contact form to DB
		public function postContact(Request $request)
		{
		    $validator = Validator::make($request->all(), [
		        'name' => 'required|max:50',
		        'email' => 'required|max:50',
		        'message' => 'required'
		    ]);

		    if ($validator->fails()) {
		        return redirect('/contact/')
		            ->withInput()
		            ->withErrors($validator);
		    }

		    $questions = new Question;
		    $questions->name = $request->name;
		    $questions->email = $request->email;
		    $questions->message = $request->message;
		    $questions->save();

		    //mailing
		    // Multiple recipients
		    $to = 'ryanbpy1@gmail.com, ryan@saddleworthlitfest.co.uk'; // note the comma
		    // Subject
		    $subject = 'Contact Form Submission '.$questions->id;
		    //defining variables for info
		    $name = $questions->name;
		    $email = $questions->email;
		    $msg = $questions->message;
		    // Message
		    $message = '
		    <html>
			    <body>
				      <p>'.$name.' has sent a message!</p>
				      <p>Name: '.$name.'</p>
				      <p>Email: '.$email.'</p>
				      <p>Message: "'.$msg.'"</p>
			    </body>
		    </html>
		    ';

		    // To send HTML mail, the Content-type header must be set
		    $headers[] = 'MIME-Version: 1.0';
		    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

		    // Additional headers
		    $headers[] = 'To: Admins';
		    $headers[] = 'From: SLF Admin <info@saddleworthlitfest.co.uk>';

		    // Mail it
		    mail($to, $subject, $message, implode("\r\n", $headers));
		    //mail over
		    Session::flash('sent', "Question sent, expect a response within 24 hours!");
		    return redirect('/contact/');
		}

	//SCHEDULE FUNCTIONS
		public function renderSchedule(){
			return view('welcome_partials.schedule');
		}
}
