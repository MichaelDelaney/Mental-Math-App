<?php
class CommentController extends \BaseController {

	public function getCreate() {
		$comments = Comment::all();
		return View::make('home');
	}
	
	public function postCreate() {
		$comment = new Comment();
		$name  = Input::get('name');
		$comment->name = $name;
		$note = Input::get('note');
	    $comment->note = $note;
		$university = Input::get('university');
	    $comment->university = $university;
		$comment->save();
		return Redirect::action('CommentController@getIndex');
	}
	
	public function getIndex() {
		$comments = Comment::all();
		return View::make('lesson1');
	}
	
}