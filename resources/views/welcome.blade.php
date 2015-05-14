<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="acai berry maca">
	<meta name="keywords" content="acai berry,maca" >
	<title>黑莓玛卡监督网</title>
	</head>
	<body>
	<center>
	<table style="font-size:120%;"><tr><td>
	<h1>黑莓玛卡监督网</h1>
	@IF(isset($msg))
	<h3 style="color:red;">
	{{$msg}}
	</h3>
	@ENDIF

	@IF(isset($aresult['msg']))
	<h2 style="color:red;">{!!$aresult['msg']!!}</h2>
	@ENDIF
	
	@IF(isset($aresult['report']) and $aresult['report'])
	<span style="color:blue;">
	<form action=/ method=post>
	<input type=hidden name=_token value="{{csrf_token()}}">
	<input type=hidden name=fn[url] value="{{Request::url()}}">
    <h2>申报部</h2>
	<p>1、货品来源，卖家各字或店名: <input type=text name=fn[shop] size=20>电话: <input type=text name=fn[telno] size=10></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址: <input type=text name=fn[address] size=40></p>
	<p>２、购买数量: <input type=text name=fn[box] value='' size=4>盒，</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购买金额    1盒: <input type=text name=fn[price] value='' size=4>¥</p>
	<p>３、您的姓名和联系方式: <input type=text name=fn[namecontact] size=40></p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="提交"></p>
	</form>
	</span>
	@ENDIF	

	<p>我们黑莓玛卡的监督网站是全世界独一无二的，大家请细心辨别，<br>以防出现健康和财产的损失。</p>
	<p>网址: http://acaiberrymaca.com/</p>
	<img src="/maca.jpg" style="max-width:100%;height:auto;">
	<h2>申告 :  </h2>
	<p>每盒黑莓玛卡内部都有一张防伪二维码，</p>
	<p>每张二维码的密码都是独一无二的，当您扫描验证码後会出现以下字样</p>
	<p>比如 : ××××××××××××是合格正品，请放心食用</p>
	<p>每一张条型码不能重复扫描验证二次，若重复输入後会出现以下字样</p>
	<p>比如 : ××××××××××××已在20150101 10:00已验证过，</p>
	<p>您目前手上的产品很可能是伪劣仿制品，请勿食用，请前往客服部申报</p>
	
	</td></tr></table>
	</center>
	</body>
</html>
