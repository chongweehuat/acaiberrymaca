<?php namespace App\Http\Controllers;

use DB;
use App\Qrcode;

class PdfController extends Controller {

	public function index($id)
	{
		if(empty($id))$id=1;
		return Qrcode::printa4($id);
	}
}