<?php
class CommentController extends \BaseController {


	
	
	public function getCreate() {
		$comments = Comment::all();
		return View::make('home');
	}
	
	/**
	* Process the "Add a book form"
	* @return Redirect
	*/
	public function postCreate() {
		# Instantiate the request model
		$comment = new Comment();
		
		# Set 
		$name  = Input::get('name');
		$comment->name = $name;
		
		$note = Input::get('note');
	    $comment->note = $note;
		
		$university = Input::get('university');
	    $comment->university = $university;
		
		# Magic: Eloquent
		$comment->save();
		return Redirect::action('CommentController@getIndex');
	}
	
	
	/**
	* Display all books
	* @return View
	*/
	
	
	public function getIndex() {
		$comments = Comment::all();
		return View::make('lesson1');
	}
	
	
	
	
}