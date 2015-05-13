<?php namespace App;
use Illuminate\Database\Eloquent\Model;

use DB;
use App;

class Qrcode extends Model {

	public static function generateRandomString($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public static function gencode(){
		for($n=1;$n<=(100000-86290);$n++){
			DB::table('qrcode')->insert([
				'code'=>self::generateRandomString()
			]);
		}
	}

	public static function printa4(){
		set_time_limit(1800);

		//$id1=2701;
		//$id2=3600;
		$id1=1;
		$id2=30;
		
		$arows=DB::table('qrcode')->where('id','>=',$id1)->where('id','<=',$id2)->get();
		$html="<style>html{margin:10px}</style>";
		$html.="<table width=100%>\n\r";
		$n=0;
		foreach($arows as $arow){
			if(!($n%3)){
				$html.='<tr>';
			}
			$html.="<td align=center style='padding-bottom:7px;'>";
			$html.="<div style='height:73;'>";
			$html.="<img src='images/abm.jpg' width=240>";
			$html.="<div style='position: relative;top:-47;left:50;'><div><img src='https://chart.googleapis.com/chart?cht=qr&chs=300&chl=http://acaiberrymaca.com/qr/{$arow->code}' height=60></div> <div style='font-size:50%;color:#C3C3C3;position: relative;top:-10;left:-100;'>{$arow->id}</div></div>";
			$html.="</div>";
			$html.='</td>';
			
			$n++;

			if(!($n%3)){				
				$html.="</tr>\n\r";				
			}			
			
			if(!($n%30)){
				$html.="</table>\n\r";
				$html.='<div style="page-break-before: always;"></div>'."\n\r";
				$html.="<table>\n\r";
			}
		}
		if($n%30)$html.='</table>';
//return $html; 
		$pdf = App::make('dompdf');
		$pdf->setPaper('A4', 'portrait');
		$pdf->loadHTML($html);
		return $pdf->save('qrcode0.pdf')->stream('download.pdf');
	}
}