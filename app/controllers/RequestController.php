<?php
class RequestController extends \BaseController {
	/**
	*
	*/
	
	
	/**
	* Process the "Add a book form"
	* @return Redirect
	*/
/**
	* Show the "Add a book form"
	* @return View
	*/
	/**
	*
	*/
	

	
	
	public function getCreate() {
		$siterequests = Siterequest::all();
		return View::make('welcome');
	}
	
	/**
	* Process the "Add a book form"
	* @return Redirect
	*/
	public function postCreate() {
		# Instantiate the request model
		$siterequest = new Siterequest();
		
		
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
		return View::make('hello');
	}
	
}