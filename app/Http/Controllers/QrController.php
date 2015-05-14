<?php namespace App\Http\Controllers;

use DB;
use App;

class QrController extends Controller {

	public function index($code)
	{
		$qrcodes=DB::table('qrcode')->where('code',$code)->get();
		if(isset($qrcodes[0])){
			if($qrcodes[0]->last_checked=='0000-00-00 00:00:00'){
				$msg="您目前手上的产品是合格正品，请放心食用。";
			}else{				
				$msg="防伪二维码已在{$qrcodes[0]->last_checked}已验证过，<br>您目前手上的产品很可能是伪劣仿制品，<br>请勿食用，请前往客服部申报。";
			}
			DB::table('qrcode')
				->where('id',$qrcodes[0]->id)
				->update(['last_checked'=>date('Y-m-d H:i:s'),'checked_count'=>$qrcodes[0]->checked_count+1]);
		}else{
			$msg="无效的防伪二维码，<br>您目前手上的产品很可能是伪劣仿制品，<br>请勿食用，请前往客服部申报。";
		}

		$msg='扫描验证结果:<br><br>'.$msg;

		return view('welcome',compact("msg"));
	}
}
