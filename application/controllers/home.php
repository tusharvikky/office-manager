<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return View::make('home.index');
		
	}

}


// $user = new User;
// $user->email = 'root@root.com';
// $user->password = Hash::make('root');
// $user->f_name = 'root';
// $user->l_name = 'root';

// $user->save();