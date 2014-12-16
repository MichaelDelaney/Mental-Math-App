<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});



Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});


# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});



Route::get('/practice-creating', function() {

    # Instantiate a new Book model class
    $siterequest = new Siterequest();

    # Set 
    $siterequest->subject = 'The Great Gatsby';
    $siterequest->author = 'F. Scott Fiztgerald';
    $siterequest->comment = 'babaganush';
    $siterequest->icon = 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG';
    $siterequest->email_link = 'http://www.barnesandnoble.com/w/the-great-gatsby-francis-scott-fitzgerald/1116668135?ean=9780743273565';

    # This is where the Eloquent ORM magic happens
    $siterequest->save();

    return 'A new book has been added! Check your database to see...';

});

Route::get('/practice-reading', function() {

    # The all() method will fetch all the rows from a Model/table
    $siterequests = Siterequest::all();

    # Make sure we have results before trying to print them...
    if($siterequests->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($siterequests as $siterequest) {
            echo $siterequest->subject.'<br>';
        }
    }
    else {
        return 'No books found';
    }

});

Route::get('/practice-reading-one-subject', function() {

    $siterequest = Siterequest::where('author', 'LIKE', '%Juan%')->first();

    if($siterequest) {
        return $siterequest->subject;
    }
    else {
        return 'Book not found.';
    }

});

Route::get('/practice-updating', function() {

    # First get a book to update
    $siterequest = Siterequest::where('subject', 'LIKE', '%5 x 5%')->first();

    # If we found the book, update it
    if($siterequest) {

        # Give it a different title
        $siterequest->subject = 'The Really Great Gatsby';

        # Save the changes
        $siterequest->save();

        return "Update complete; check the database to see if your update worked...";
    }
    else {
        return "Book not found, can't update.";
    }

});


Route::get('/practice-deleting', function() {

    # First get a book to delete
    $siterequest = Siterequest::where('author', 'LIKE', '%Juan%')->first();

    # If we found the book, delete it
    if($siterequest) {

        # Goodbye!
        $siterequest->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - Book not found.";
    }

});

Route::get('/practice-collection', function() {
		$collection = Siterequest::all();

		foreach($collection as $siterequest) {
			echo $siterequest->subject."<br>";
		}

});

Route::get('/home', function() {
	return View::make('hello');
});

Route::get('/beginnerlessons', function() {
	return View::make('beginnerlessons');
});

Route::get('/advancedlessons', function() {
	return View::make('advancedlessons');
});

Route::get('/lesson1', function() {
	return View::make('lesson1');
});

Route::get('/lesson2', function() {
	return View::make('lesson2');
});

Route::get('/lesson3', function() {
	return View::make('lesson3');
});

Route::get('/lesson4', function() {
	return View::make('lesson4');
});

Route::get('/lesson5', function() {
	return View::make('lesson5');
});

Route::get('/lesson6', function() {
	return View::make('lesson6');
});

Route::get('/requestalesson', function() {
	return View::make('requestalesson');
});

Route::get('/request_edit', function() {
	return View::make('request_edit');
});

Route::get('/request/create', 'RequestController@getCreate');
Route::post('/request/create', 'RequestController@postCreate');
Route::get('/siterequest', 'RequestController@getIndex');
Route::get('/request/edit', 'RequestController@getEdit');
Route::post('/request/edit', 'RequestController@postEdit');

Route::get('/search', function() {
	$query = Input::get('query');
	$siterequest = Siterequest::where('subject', 'LIKE', '%'. $query .'%')->first();
 if($siterequest) {
	return View::make('request_editresult')
		->with('query', $query);
		 }
    else {
        return "We couldn't find the topic you want to update.";
    }
});

