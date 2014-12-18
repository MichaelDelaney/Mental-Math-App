<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('mysql-test', function() {
	echo 'Environment: '.App::environment().'<br>';
	$results = DB::select('SHOW DATABASES;');
	echo Pre::render($results);
});

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

Route::get('/practice-reading', function() {
	$siterequests = Siterequest::all();
	if($siterequests->isEmpty() != TRUE) {
		foreach($siterequests as $siterequest) {
            echo $siterequest->subject.'<br>';
        }
    }
    else {
        return 'No books found';
    }
});

Route::get('/updating', function() {
$edit = Input::get('edit');
    $siterequest = Siterequest::where('id', '=', $edit)->first();
	if($siterequest) {
		$author = Input::get('author');
	    $siterequest->author = $author;
		$comment = Input::get('comment');
	    $siterequest->comment = $comment;
        $siterequest->save();
        return View::make('requestalesson')->with('flash_message', 'Thank you for your update.');
    }
    else {
		return View::make('requestalesson')->with('flash_message', 'Edit failed; please try again.');
    }
});

Route::get('/deleterequest', function() {
$delete = Input::get('delete');
    $siterequest = Siterequest::where('id', '=', $delete);
	if($siterequest) {
		$siterequest->delete();
		return View::make('requestalesson');
    }
    else {
        return View::make('requestalesson');
    }
});

Route::get('/deletecomment', function() {
	$delete = Input::get('delete');
	$comment = Comment::where('id', '=', $delete);
	if($comment) {
		$comment->delete();
        return View::make('lesson1');
    }
    else {
        return View::make('lesson1');
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


Route::get('/beginnerlessons', function()
{
    return View::make('beginnerlessons');
});

Route::get('/advancedlessons', function() {
	return View::make('advancedlessons');
});

Route::get('/lesson1', array('before' => 'auth', function() {
	return View::make('lesson1');
}));

Route::get('/lesson2', array('before' => 'auth', function() {
	return View::make('lesson2');
}));

Route::get('/lesson3', array('before' => 'auth', function() {
	return View::make('lesson3');
}));

Route::get('/lesson4', array('before' => 'auth', function() {
	return View::make('lesson4');
}));

Route::get('/lesson5', array('before' => 'auth', function() {
	return View::make('lesson5');
}));

Route::get('/lesson6', array('before' => 'auth', function() {
	return View::make('lesson6');
}));

Route::get('/specialthanks', function() {
	return View::make('specialthanks');
});

Route::get('/requestalesson', array('before' => 'auth', function() {
	return View::make('requestalesson');
}));

Route::get('/welcomethanks', array('before' => 'auth', function() {
	return View::make('welcomethanks');
}));

Route::get('/request_edit', function() {
	return View::make('request_edit');
});


Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {
		$rules = array(
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()) {
			return Redirect::to('/signup')
				->with('flash_message', 'Sign up failed; please use a <b>valid email address</b> and a password with a <b>minimum of 6 characters</b>.')
				->withInput()
				->withErrors($validator);
		}
            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
			try {
                $user->save();
            }
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }
			Auth::login($user);
            return Redirect::to('/welcomethanks');
        }
    )
);

Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {
            $credentials = Input::only('email', 'password');
            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }
            return Redirect::to('login');
        }
    )
);

Route::get('/logout', function() {
	Auth::logout();
	return Redirect::to('/');
});

Route::get('/request/create', 'RequestController@getCreate');
Route::post('/request/create', 'RequestController@postCreate');
Route::get('/siterequest', 'RequestController@getIndex');
Route::get('/request/edit', 'RequestController@getEdit');
Route::post('/request/edit', 'RequestController@postEdit');
Route::get('/comment/create', 'CommentController@getCreate');
Route::post('/comment/create', 'CommentController@postCreate');
Route::get('/comments', 'CommentController@getIndex');
Route::get('/comment/edit', 'CommentController@getEdit');
Route::post('/comment/edit', 'CommentController@postEdit');
Route::post('/comment/delete', 'CommentController@postDelete');
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

