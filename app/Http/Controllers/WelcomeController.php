<?php namespace App\Http\Controllers;

use Input;

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
		$msg='';

		$subbmit=Input::get('submit');
		if($subbmit){
			$fn=Input::get('fn');
			$namecontact=Input::get('namecontact');
		
			$subject='黑莓玛卡监督网 - 申报';

			$body ="店名: {$fn['shop']}<br>";
			$body.="电话: {$fn['telno']}<br>";
			$body.="地址: {$fn['address']}<br>";
			$body.="数量: {$fn['box']}<br>";
			$body.="金额: {$fn['price']}<br>";
			$body.="联系: {$fn['namecontact']}<br>";

			Mail::send('email', compact("body"), function($message)
			{
				$message->to('chongweehuat@gmail.com', '')->subject($subject);
			});

			$msg='申报已成功提交！';
		}		
		
		return view('welcome',compact("msg"));
	}

}
