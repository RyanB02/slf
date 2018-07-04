<?php
use App\User;
use App\Question;
use App\QuestionNote;
use App\Attending;
use App\Author;
use App\frontpageoption;
use App\Sponsor;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\SendMailController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Auth\Authenticatable;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', 'TestController@index');
Route::get('/', [
  'as' => 'welcome',
  'uses' => 'Home\WelcomeController@renderHome'
]);



Route::post('/',[
  'as' => 'sendContactHome',
  'uses' => 'Home\WelcomeController@postContactFromHome'
]);

Route::view('/test_calendar', 'test_calendar');

Route::post('logout', function(Auth $Auth){
    Session::flash('logout', "{$Auth::user()->id}");
//mailing
        // Multiple recipients
        $to = 'ryanbpy1@gmail.com'; // note the comma
        // Subject
        $subject = Auth::user()->name. ' has logged out!';
        //defining variables for info
        $name = Auth::user()->name;
        // Message
        $message = '
            <html>
                <body>
                  <p>'.$name.' has logged out!</p>
                  <p>At date: '.date('D d M Y g:i:s A ').'</p>
                  <p>IP of user: '.$_SERVER["REMOTE_ADDR"].'</p>
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
      $user_t = User::find($Auth::user()->id);
      $user_t->session_end = date('d/m/Y g:i a ');
      $user_t->save();
    Auth::logout();
    return redirect('/');
})->name('logout');


// Authentication Routes
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', function(Request $request, User $user, Auth $Auth){
    
    $userData = User::where('email',$request->email)->first(); 
    if ($userData && Hash::check($request->password, $userData->password)) { 
            $user = User::where('email',$request->email)->first(); 
           Auth::login($user);
           $user_t = User::find($user->id);
           $user_t->session_start = date('d/m/Y g:i a ');
           $user_t->save();
         //mailing
        // Multiple recipients
        $to = 'ryanbpy1@gmail.com'; // note the comma
        // Subject
        $subject = Auth::user()->name. ' has logged in!';
        //defining variables for info
        $name = Auth::user()->name;
        // Message
        $message = '
            <html>
                <body>
                  <p>'.$name.' has logged in!</p>
                  <p>At date: '.date('D d M Y g:i:s A ').'</p>
                  <p>IP of user: '.$_SERVER["REMOTE_ADDR"].'
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
        
        $url = $request->url;
        if($url != null)
        {
            return redirect($url); 
        }else{
            return redirect('/');
        }
        
    }else{
        return redirect('/login')->withInput()->withErrors('Please check email and/or password');
    }
});



// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
  'as' => '',
  'uses' => 'Auth\RegisterController@register'
]);



Route::get('/admin', [
  'as' => 'admin',
  'uses' => 'Admin\AdminController@renderIndex'
]);

Route::get('/admin/notes', [
      'as' => 'add_note_admin',
      'uses' => 'Admin\AdminController@renderNotes'
]);

Route::post('/admin/add_note/', [
  'as' => 'admin_edit_about_post',
  'uses' => 'Admin\AdminController@postNotes'
]);

Route::get('/admin/featuring', [
  'as' => 'admin_add_featuring',
  'uses' => 'Admin\AdminController@renderFeaturing'
]);

Route::get('/admin/featuring/add', [
  'as' => 'admin_add_featuring_add',
  'uses' => 'Admin\AdminController@renderAddFeaturing'
]);

Route::post('/admin/featuring/add', [
  'as' => 'admin_add_featuring_add',
  'uses' => 'Admin\AdminController@AddFeaturing'
]);

Route::post('/admin/featuring/delete/{featured}', [
  'as' => 'admin_featured_delete',
  'uses' => 'Admin\AdminController@postDeleteFeatured'
]);

Route::post('/admin/featuring_edit/{featured}', [
  'as' => 'admin_edit_featured',
  'uses' => 'Admin\AdminController@postEditFeatured'
]);

Route::get('/admin/sponsors', [
  'as' => 'admin_add_sponsor',
  'uses' => 'Admin\AdminController@renderSponsor'
]);

Route::post('/admin/sponsors', [
  'as' => 'admin_add_sponsor',
  'uses' => 'Admin\AdminController@addSponsor'
]);

Route::get('/admin/edit_about', [
  'as' => 'admin_edit_about',
  'uses' => 'Admin\AdminController@renderEditAbout'
]);

Route::post('/admin/edit_about', [
  'as' => 'admin_edit_about_post',
  'uses' => 'Admin\AdminController@postEditAbout'
]);

Route::get('/admin/add_guest', [
  'as' => 'admin_add_guest',
  'uses' => 'Admin\AdminController@renderAddGuest'
]);

Route::get('/admin/add_guest/{id}', [
  'as' => 'admin_confirm',
  'uses' => 'Admin\AdminController@renderAddGuestConfirm'
]);

Route::post('/admin/add_guest/confirm/{id}', function(Request $request, Author $author){
        $validator = Validator::make($request->all(), [
            'data' => 'required',
        ]);
        $test = request()->route('id');
        $author = Author::find($test);
        $author->confirm_add = $request->data;
        $author->save();

        return redirect('/admin/add_guest/'.$test.'');

});

Route::post('/admin/add_guest', [
  'as' => 'admin_add_guest',
  'uses' => 'Admin\AdminController@postAddGuest'
]);

Route::get('/admin/edit_guest/{author}', [
  'as' => 'admin_edit_guest',
  'uses' => 'Admin\AdminController@renderEditGuest'
]);

Route::get('/admin/questions', [
      'as' => 'admin_questions_home',
      'uses' => 'Admin\AdminController@renderQuestions'
]);

Route::get('/admin/questions/{question}', [
      'as' => 'admin_questions_indiv',
      'uses' => 'Admin\AdminController@renderQuestionReview'
]);

Route::get('/admin/edit_guests', [
      'as' => 'edit_guests',
      'uses' => 'Admin\AdminController@renderEditGuests'
]);


Route::post('/admin/edit_guest/{authors}', [
  'as' => 'admin_edit_guest',
  'uses' => 'Admin\AdminController@postEditGuest'
]);

Route::post('/admin/edit_guest/delete/{author}', [
  'as' => 'admin_guest_delete',
  'uses' => 'Admin\AdminController@postDeleteGuest'
]);

Route::post('/admin/edit_guest/restore/{author}', [
  'as' => 'admin_guest_restore',
  'uses' => 'Admin\AdminController@postRestoreGuest'
]);

Route::get('/admin/questions/{id}', [
  'as' => 'indiv_questions_review',
  'uses' => 'Admin\AdminController@renderIndivQuestion'
]);

//Route::get('/admin/questions/{id}', function(Question $id){
  //  $questions = request()->route('id');
    //return view('admin.question');

//});
Route::get('/admin/event_management', [
  'as' => 'event_management_index',
  'uses' => 'Admin\AdminController@renderEventManagementIndex'

]);

Route::get('/admin/events', [
  'as' => 'events_overview_admin',
  'uses' => 'Admin\AdminController@renderEditEvents'
]);

Route::get('/admin/events/add', [
  'as' => 'events_add_admin',
  'uses' => 'Admin\AdminController@renderAddEvent'
]);

Route::get('/admin/user_options', [
  'as' => 'user_overview_admin',
  'uses' => 'Admin\AdminController@renderUserOptions'
]);

Route::get('/admin/edit_pages/index', [
  'as' => 'edit_pages_index',
  'uses' => 'Admin\AdminController@renderEPIndex'
]);

Route::post('/admin/edit_pages/index/boxstat', [
  'as' => '',
  'uses' => 'Admin\AdminController@postEPIndexBoxStat'
]);

Route::get('/reset_auth/{name}/{change_password}', [
  'as' => 'resetpass_auth',
  'uses' => 'Admin\AdminController@renderResetAuth'
]);

Route::post('/reset_auth', [
  'as' => 'admin_reset_auth',
  'uses' => 'Admin\AdminController@postResetAuth'
]);


Route::post('/admin/question/status/{questions}', function(Request $request, Question $questions, Auth $Auth){
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/questions/'.$questions->id)
                ->withInput()
                ->withErrors($validator);
        }

        $questions = Question::find($questions->id);
        $questions->status = $request->status;
        $questions->save();
        SendMailController::noti_question_status_change($questions, $Auth);
        Session::flash('edited', "the status of {$questions->name} has been changed");
        return redirect('/admin/questions/'.$questions->id);

});


//Route::post('/admin/question/status/notes/{questions}', [
  //'as' => 'admin_adding_notes_i_think',
  //'uses' => 'Admin\AdminController@postResetAuth'
//]);

Route::post('/admin/question/status/notes/{questions}', function(Request $request, QuestionNote $question_notes, Question $questions, Auth $Auth){
        $validator = Validator::make($request->all(), [
            'note' => '',
            'bind' => 'required',
            'status' => '',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/questions/'.$questions->id)
                ->withInput()
                ->withErrors($validator);
        }



        if (Input::has('status'))
        {
            $questions = Question::find($questions->id);
            $questions->status = $request->status;
            $questions->save();
            $question_notes = new QuestionNote;
            $question_notes->note =  " QUESTION CLOSED";
            $question_notes->bind = $request->bind;
            $question_notes->save();
            
        }else{
            $question_notes = new QuestionNote;
            $question_notes->note = $request->note;
            $question_notes->bind = $request->bind;
            $question_notes->save();
        }

        
        SendMailController::noti_question_status_change($questions, $Auth);
        Session::flash('edited', "Question Edited");
        return redirect('/admin/questions/'.$question_notes->bind);

});


//HOME PAGE OPTION ROUTES
    Route::get('/about/', [
        'as' => 'about',
        'uses' => 'Home\WelcomeController@renderAbout',
    ]);

    Route::get('/events/', [
        'as' => 'upcoming',
        'uses' => 'Home\WelcomeController@renderUpcoming',
    ]);

    Route::get('/guests/', [
        'as' => 'guests',
        'uses' => 'Home\WelcomeController@renderGuests',
    ]);

    Route::get('/guests/{id}', [
        'as' => 'guests_indiv',
        'uses' => 'Home\WelcomeController@renderGuestsIndiv',
    ]);

    Route::get('/featuring/', [
        'as' => 'featuring',
        'uses' => 'Home\WelcomeController@renderFeaturing',
    ]);

    Route::get('/contact/', [
      'as' => 'contact',
      'uses' => 'Home\WelcomeController@renderContact'
    ]);

    Route::post('/contact/', [
      'as' => 'contact',
      'uses' => 'Home\WelcomeController@postContact'
    ]);

    Route::get('/schedule/', [
      'as' => 'schedule',
      'uses' => 'Home\WelcomeController@renderSchedule'
    ]);





Route::view('/admin/deleted_guests', 'admin.deleted_guests')->name('deleted_guests');






Route::view('/submitwork', 'welcome_partials.submitwork')->name('submitwork');

Route::view('/mailtest', 'mail');

Route::post('admin/edit_guest/set_priority/{author}', function(Author $author, Request $request){
        $author = Author::find($author->id);
        $author->featured = $request->star;
        $author->save();
        if($request->star == 1){
          Session::flash('edited', 'You have just given '.$author->name.' a special gold star!');
        }else{
          Session::flash('edited', 'You have just taken away '.$author->name.'s special gold star!');
        }
        
        return redirect('/admin/edit_guests/');
});

Route::view('/test_sched', 'welcome_partials.sched_test');

Route::view('/schedule/pp', 'pp');

Route::view('/2019/home', '2019 refresh.welcome');