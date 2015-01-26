<?php 

/**
* Admin Filter
*/
class AdminFilter
{
	public function filter()
	{
		if (Auth::guest()) return View::make('shoulderscms::AdminLTE.login');
	}
}