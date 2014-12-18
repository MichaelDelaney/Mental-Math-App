<?php
class RequestController extends \BaseController {

	public function getCreate() {
		$siterequests = Siterequest::all();
		return View::make('home');
	}
	
	public function postCreate() {
		$siterequest = new Siterequest();
		$subject  = Input::get('subject');
		$siterequest->subject = $subject;
		$author = Input::get('author');
	    $siterequest->author = $author;
		$comment = Input::get('comment');
	    $siterequest->comment = $comment;
		$email = Input::get('email_link');
	    $siterequest->email_link = $email;
		$siterequest->save();
		return Redirect::action('RequestController@getIndex');
	}
	
	public function getIndex() {
		$siterequests = Siterequest::all();
		return View::make('requestalesson');
	}
	
	public function getEdit() {
    	return View::make('request_edit')
    		->with('author', $author);
	}
	
	public function postEdit() {
	$query  = Input::get('query');
	$siterequest = Siterequest::where('subject', 'LIKE', '%'. $query .'%')->first();
	if($siterequest) {
		$siterequest->subject = 'hi2';
        $siterequest->save();
		     return "We couldn't find the topic you want to update.";
    }
    else {
        return "We couldn't find the topic you want to update.";
    }
	}
	
	public function postDelete() {
		try {
	        $comment = Comment::get('id');
	    }
	    catch(exception $e) {
	        return Redirect::to('/requestalesson/');
	    }
	    Comment::destroy(Input::get('id'));
	    return Redirect::to('/requestalesson/');
	}
	
}