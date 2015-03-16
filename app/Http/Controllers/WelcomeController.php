<?php namespace App\Http\Controllers;
	
use App\Customer;
use Config;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get some customers for the gravatar grid
		$customers = Customer::take(Config::get('settings.home_gravatars'))
							 ->orderBy('created_at', 'desc')
							 ->get();
		
		// return the homepage
		return view('welcome', ['customers' => $customers]);
	}

}
