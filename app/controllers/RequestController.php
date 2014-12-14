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
	
}