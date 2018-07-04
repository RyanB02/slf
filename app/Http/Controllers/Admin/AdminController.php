<?php

namespace App\Http\Controllers\Admin;

use Hash;
use Auth;
use App\User;
use App\Author;
use App\Sponsor;
use App\Featured;
use App\frontpageoption;
use App\Question;
use App\tmpnote;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Image;

class AdminController extends Controller
{
   //ADMIN INDEX FUNCTIONS
	    public static function renderIndex(){
	    	if(Auth::user() && Auth::user()->change_password == 0)
	    		{
	    			return view('admin.index');
	    		}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    		}
	    	
	    }
    //ADMIN EDIT ABOUT PAGE FUNCTIONS
	    public function renderEditAbout(){
	    	if(Auth::user() && Auth::user()->change_password == 0)
	    		{
	    			return view('admin.edit_about');
	    		}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    		}
	    }
	    //POSTING ABOUT PAGE DATA
	    public function postEditAbout(frontpageoption $front, Request $request){
	    	if(Auth::user() && Auth::user()->change_password == 0){
		    	$about = frontpageoption::where('element_name', 'front_about')->first();
			    $about->about = $request->about;
			    $about->save();
		    	Session::flash('edited', 'About Page Succesfully edited');
	    		return redirect('/admin');
	    	}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}
	    }
	//ADMIN  GUEST FUNCTIONS
		public function renderAddGuest(){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					
					return view('admin.admin_partials.add_guest');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
		public function renderAddGuestConfirm($id){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					$test = request()->route('id');
					$guest = Author::find($test);
					return view('admin.admin_partials.add_guest_confirm')->with('guest', $guest);
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
		//POSTING NEW GUEST TO DB
		public function postAddGuest(Request $request, Author $author){
			if(Auth::user() && Auth::user()->change_password == 0){
				$validator = Validator::make($request->all(), [
			        'name' => 'required|unique:authors|max:50',
			        'desc' => 'required',
			        'image' => 'required',
			    ]);

			    if ($validator->fails()) {
			        return redirect('/admin/add_guest')
			            ->withInput()
			            ->withErrors($validator);
			    }

			    if($request->hasFile('image')){
			        $image = $request->file('image');
			        $filename = time() . " - " . $image->getClientOriginalName();
			        Image::make($image)->save(public_path('/uploads/writers-speakers/' . $filename));
			    }

			    $author = new Author;
			    $author->image = $filename;
			    $author->name = $request->name;
			    $author->desc = $request->desc;
			    $author->more = $request->more;
			    $author->save();
			    $last = Author::orderBy('id', 'desc')->first();
			    return redirect('/admin/add_guest/'.$last->id.'');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}


		
		}

		public function renderEditGuests(Author $author){
			if(Auth::user() && Auth::user()->change_password == 0){
				return view('admin.admin_partials.edit_guests');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}
			
		}

		public function postEditGuest(Request $request, Author $authors){
			if(Auth::user() && Auth::user()->change_password == 0){
			    $authors = Author::find($authors->id);
			    $authors->name = $request->name;
			    $authors->desc = $request->desc;
			    $authors->more = $request->more;
			    $authors->save();

			    Session::flash('edited', "You have succesfully edited {$authors->name}!");
			    return redirect('/admin/edit_guests#an');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}

		}

		//DELETING GUEST
		public function postDeleteGuest(Author $author){
			if(Auth::user() && Auth::user()->change_password == 0){
				$author = Author::find($author->id);
			    $author->deleted = 1;
			    $author->save();

			    Session::flash('removed', "{$author->name} has been removed! But if you want to restore the guest, go to the deleted guest page!");
			    return redirect('admin/edit_guests');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}

		}
		//restoring guests
		public function postRestoreGuest(Author $author){
			if(Auth::user() && Auth::user()->change_password == 0){
				$author = Author::find($author->id);
			    $author->deleted = 0;
			    $author->save();

			    Session::flash('edited', "{$author->name} has been restored! if you want to delete them again just click delete....again...");
			    return redirect('admin/edit_guests');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}

		}
	//ADMIN QUESTIONS FUNCTIONS
		public function renderQuestions(Question $question)
		{
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.questions');
				}else
				{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
			
		}
		public function renderQuestionReview(Question $question)
		{
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.question_review');
				}else
				{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
			
		}
	//ADMIN INDEX NOTES FUNCTIONS
		public function renderNotes()
		{
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.add_note');
				}else
				{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
		public function postNotes(Request $request)
		{
			if(Auth::user() && Auth::user()->change_password == 0)
				{
				    $validator = Validator::make($request->all(), [
				        'note' => 'required',
				    ]);

				    if ($validator->fails()) {
				        return redirect('/admin/notes')
				            ->withInput()
				            ->withErrors($validator);
				    }else{
					    $note = new TMPNOTE;
					    $note->note = $request->note;
					    $note->save();
					    Session::flash('edited', "Note added Succesfully!");
					    return redirect('/admin/');
				    }

				    
				}else
				{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
			}
	//ADMIN ADDING AND DELETING SPONSORS
		public function renderSponsor()
		{
			if(Auth::user() && Auth::user()->change_password == 0)
			{

			    return view('admin.edit_sponsors');
			}else
			{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
			}
		}

		public function AddSponsor(Request $request, Sponsor $sponsor)
		{
		if(Auth::user() && Auth::user()->change_password == 0)
			{
				    $validator = Validator::make($request->all(), [
					        'name' => 'max:50',
					        'image' => 'required',
					        'website' => 'required'
					    ]);

					    if ($validator->fails()) {
					        return redirect('/admin/sponsors')
					            ->withInput()
					            ->withErrors($validator);
					    }

					    if($request->hasFile('image')){
					        $image = $request->file('image');
					        $filename = time() . " - " . $image->getClientOriginalName();
					        Image::make($image)->save(public_path('/uploads/sponsors/' . $filename));
					    }


					    $website = "http://$request->website";
					    $sponsor = new sponsor;
					    $sponsor->image = $filename;
					    $sponsor->website = $website;
					    $sponsor->name = $request->name;
					    $sponsor->desc = 'null';
					    $sponsor->save();

					    Session::flash('added', "sponsor added");
					    return redirect('/admin/');
				    

			    return view('admin.edit_sponsors');

			}else
			{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
			}
		}
	//ADMIN EDIT FEATURING FUNCTIONS
		public function renderFeaturing()
		{
			if(Auth::user() && Auth::user()->change_password == 0){
				return view('admin.admin_partials.featuring_overview');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}
			
		}	

		public function renderAddFeaturing()
		{
			if(Auth::user() && Auth::user()->change_password == 0){
				return view('admin.admin_partials.add_featuring');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}
			
		}	

		public function AddFeaturing(Request $request, Featured $featured)
		{
			if(Auth::user() && Auth::user()->change_password == 0)
			{
				    $validator = Validator::make($request->all(), [
					        'name' => 'required|max:50',
					        'image' => 'required',
					        'website' => 'required'
					    ]);

					    if ($validator->fails()) {
					        return redirect('/admin/featuring/add')
					            ->withInput()
					            ->withErrors($validator);
					    }

					    if($request->hasFile('image')){
					        $image = $request->file('image');
					        $filename = time() . " - " . $image->getClientOriginalName();
					        Image::make($image)->save(public_path('/uploads/featured/' . $filename));
					    }


					    $website = "http://$request->website";
					    $Featuring = new Featured;
					    $Featuring->image = $filename;
					    $Featuring->website = $website;
					    $Featuring->name = $request->name;
					    $Featuring->save();

					    Session::flash('added', "Featured Guest added");
					    return redirect('/admin/featuring');
				    

			    return view('admin.admin_partials.featuring_overview');

			}else
			{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
			}
		}	
		public function postDeleteFeatured(Featured $Featured){
			if(Auth::user() && Auth::user()->change_password == 0){
				$Featured = Featured::find($Featured->id);
			    $Featured->delete();

			    Session::flash('removed', "{$Featured->name} has been removed! ");
			    return redirect('admin/featuring');
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}

		}
		public function postEditFeatured(Request $request, Featured $featured){
			if(Auth::user() && Auth::user()->change_password == 0){
			    $featured = Featured::find($featured->id);
			    $featured->name = $request->name;
			    $featured->website = $request->website;
			    $featured->save();

			    Session::flash('edited', "You have succesfully edited {$featured->name}!");
			    return redirect('/admin/featuring');	
			}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
	    	}

		}
	//FUNCTIONS FOR EDITING/ADDING EVENTS FUNCTIONALITY
		public function renderEditEvents(){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.events_overview');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}

		public function renderAddEvent(){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.event_add');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
	//MANDITORY PASSWORD RESET FOR ADMIN
		public function renderResetAuth(){
			if(Auth::user() && Auth::user()->change_password == 1)
				{
					return view('auth.passwords.resetauth');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
			
		}

		public function postResetAuth(User $user, Request $request,Auth $Auth){
			$userData = User::where('email',$request->email)->first(); 
			if ($request->password == $userData->password) {
				if($request->new_password == $request->new_password_conf and $request->new_password_conf != $userData->password)
				{
					if(Hash::check($request->new_password_conf, $userData->password) == true){
						return redirect('/reset_auth/'.Auth::user()->name.'/'.Auth::user()->change_password)->withErrors("You have used that password before, change it up a bit!");
					}else{
						$user_t = User::find(Auth::user()->id);
						$user_t->password = Hash::make($request->new_password_conf);
						$user_t->change_password = 0;
						$user_t->save();
						Session::flash('pass_changed', '');
						return redirect('admin');
					}

				}else{
					return redirect('/reset_auth/'.Auth::user()->name.'/'.Auth::user()->change_password)->withErrors("It looks like them passwords don't match, please try again!");
				}
				
			}else{
				dd('something went wrong, please email me at ryanbpy1@gmail.com and tell me about it!');
			}
		}
	//FUNCTIONS FOR USER OPTIONS FUNCTIONALITY	
		public function renderUserOptions(){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.admin_partials.userOptionsOverview');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
	//QUESTION REVIEW FUNCTIONS YADA YADA ETC....
		public function renderIndivQuestion(Request $request){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					$questions = request()->route('id');
    				return view('admin.question');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
	//EVENT MANAGEMENT FUNCTIONS
		public function renderEventManagementIndex(){
			if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.event_management.index');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
	//EDITING PAGES FUNCTIONS
		public function renderEPIndex(){
				if(Auth::user() && Auth::user()->change_password == 0)
				{
					return view('admin.EP.index');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
		public function postEPIndexBoxStat(frontpageoption $frontpageoption, Request $request){
				if(Auth::user() && Auth::user()->change_password == 0)
				{
						$about = frontpageoption::where('element_name', $request->box_name)->first();
					    $about->data = $request->data;
					    $about->save();
					    return redirect('/admin/edit_pages/index');
				}else{
					if(Auth::user())
						{
	    					return view('auth.passwords.resetauth');
						}else{
	    				Session::flash('login', 'You need to be logged in to view this page!');
		    			$url = $_SERVER['REQUEST_URI'];
		    			Session::flash('url', $url);
		    			return redirect('login');
	    			}
				}
		}
}
