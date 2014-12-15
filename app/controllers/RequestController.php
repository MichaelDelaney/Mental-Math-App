<?php
class RequestController extends \BaseController {


	
	
	public function getCreate() {
		$siterequests = Siterequest::all();
		return View::make('home');
	}
	
	/**
	* Process the "Add a book form"
	* @return Redirect
	*/
	public function postCreate() {
		# Instantiate the request model
		$siterequest = new Siterequest();
		
		# Set 
		$subject  = Input::get('subject');
		$siterequest->subject = $subject;
		
		$author = Input::get('author');
	    $siterequest->author = $author;
		
		$comment = Input::get('comment');
	    $siterequest->comment = $comment;
		
		$email = Input::get('email_link');
	    $siterequest->email_link = $email;
		
		# Magic: Eloquent
		$siterequest->save();
		return Redirect::action('RequestController@getIndex');
	}
	
	
	/**
	* Display all books
	* @return View
	*/
	
	
	public function getIndex() {
		$siterequests = Siterequest::all();
		return View::make('requestalesson');
	}
	
	
	public function getEdit() {
		
    	return View::make('request_edit')
    		->with('author', $author);
	}
	
	
	public function postEdit() {
	
	#$query = Input::get('query');
	#return View::make('request_edit')
	#	->with('query', $query);
	
	$query  = Input::get('query');
	 # First get a book to update
    $siterequest = Siterequest::where('subject', 'LIKE', '%'. $query .'%')->first();

    # If we found the book, update it
    if($siterequest) {

        # Give it a different title
        $siterequest->subject = 'hi2';
	                #<?php
					#		$siterequest = Siterequest::where('subject', 'LIKE', '%'. $query .'%')->first();
					#			echo "<br />";
					#			echo "<b>Request Topic Name</b><br />";
					#			echo $siterequest->subject."<br />";
					#			echo "<b>Requester's Name</b><br />";
					#			echo $siterequest->author."<br />";
					#			echo "<b>Details</b><br />";
					#			echo $siterequest->comment."<br />";
					#			echo "<b>Contact Address:</b><br />";
					#			echo $siterequest->email_link."<br />";
							
					#	
        # Save the changes
        $siterequest->save();
		     return "We couldn't find the topic you want to update.";
   
    }
    else {
        return "We couldn't find the topic you want to update.";
    }
	}
	
}