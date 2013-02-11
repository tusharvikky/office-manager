<?php
/**
 * Author - tusharvikky
 */

Route::get('/', function(){
	if(Auth::check()) return Redirect::to('auth');
	else return View::make('home.index');
});

Route::post('/', function(){
	$v_rules = array(
		'email' => 'required',
		'password' => 'required');

	$v = Validator::make(Input::all(), $v_rules);

	if( $v->passes() )
	{
		$credentials = array(
			'username' => Input::get('email'),
			'password' => Input::get('password') );
		
		if( Auth::attempt($credentials) )
		{
			return Redirect::to('auth');
			
		}

	}
	else{
		dd($v->errors);
		$data['error'] = $v->errors;
		return View::make('home.index', $data);
	}

});

Route::get('logout', function(){
	
	Auth::logout();

	return Redirect::to('/');	
});


Route::group(array('before' => 'auth'), function()
{
    Route::get('auth', function()
    {
        $data['user'] = Auth::user();
		return View::make('logged.auth', $data);
    });
 
    Route::get('attend', function()
    {
        $data['date'] = date("F j, Y"); 
        $data['time'] = date("g:i a");
		
		return View::make('logged.attend', $data);
    });

    Route::post('auth', function()
    {
    	$v_rules = array(
    		'f_name' => 'required|min:3',
    		'l_name' => 'required');

    	$v = Validator::make(Input::all(), $v_rules);

    	if($v->passes())
    	{
    		$email = Auth::user()->email;

    		$aff = DB::table('users')
    					->where('email', '=', $email)
    					->update(array('f_name' => Input::get('f_name'),
    									'l_name' => Input::get('l_name')
    							));

    		return Redirect::to('auth');

    	}else{
    		//dd($v->errors);
    		$data['errors'] = $v->errors;
    		return Redirect::to('auth');
    	}

    	

    });

    Route::post('attend', function()
    {
    	$v_rules = array(
    		'time_in' => 'required');

    	$v = Validator::make(Input::all(), $v_rules);

    	if($v->passes())
    	{
    		$attend = new Attend;
    		$attend->uid = Auth::user()->id;
    		$attend->email = Auth::user()->email;
    		$attend->date = date("F j, Y");
    		$attend->time_in = Input::get('time_in');
    		$attend->save();

    		return Redirect::to('auth');
    	}
    });



});






Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});



Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('/');
});

/**
 * Author - tusharvikky
 */