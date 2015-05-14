<?php namespace App\Http\Controllers;

use Input;
use Mail;

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
	
			$body ="URL: {$fn['url']}<br>";
			$body.="店名: {$fn['shop']}<br>";
			$body.="电话: {$fn['telno']}<br>";
			$body.="地址: {$fn['address']}<br>";
			$body.="数量: {$fn['box']}<br>";
			$body.="金额: {$fn['price']}<br>";
			$body.="联系: {$fn['namecontact']}<br>";

			Mail::send('email', compact("body"), function($message)
			{
				$xsubject='黑莓玛卡监督网 - 申报';
				$message->from('support@acaiberrymaca.com', '黑莓玛卡监督网');
				$message->to('chongweehuat@gmail.com', '')->subject($xsubject);
				$message->to('Liulilight111@hotmail.com', '')->subject($xsubject);
				$message->to('hubing117@yahoo.com.tw', '')->subject($xsubject);
				$message->to('1781625031@qq.com', '')->subject($xsubject);
			});

			$msg='申报已成功提交！';
		}		
		
		return view('welcome',compact("msg"));
	}

}
