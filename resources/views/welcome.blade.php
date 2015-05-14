<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="acai berry maca">
	<meta name="keywords" content="acai berry,maca" >
	<title>黑莓玛卡监督网</title>
	<style>
	body {
		position: absolute;
		top: 0; bottom: 0; left: 0; right: 0;
		height: 100%;
		color:green;
	}
	body:before {
		content: "";
		position: absolute;
		background: url(/maca.jpg);
		background-size: cover;
		z-index: -1; /* Keep the background behind the content */
		height: 20%; width: 20%; /* Using Glen Maddern's trick /via @mente */

		/* don't forget to use the prefixes you need */
		transform: scale(5);
		transform-origin: top left;
		filter: blur(0.3px);
	}
	</style>
	</head>
	<body>
	<center>
	<table><tr><td>
	<br><br>
	<h1>黑莓玛卡监督网</h1>
	<p>我们黑莓玛卡的监督网站是全世界独一无二的，大家请细心辨别，<br>以防出现健康和财产的损失。</p>
	<p>网址: http://acaiberrymaca.com/</p>
	<h2>申告 :  </h2>
	<p>每盒黑莓玛卡内部都有一张防伪二维码，</p>
	<p>每张二维码的密码都是独一无二的，当您扫描验证码後会出现以下字样</p>
	<p>比如 : ××××××××××××是合格正品，请放心食用</p>
	<p>每一张条型码不能重复扫描验证二次，若重复输入後会出现以下字样</p>
	<p>比如 : ××××××××××××已在20150101 10:00已验证过，</p>
	<p>您目前手上的产品很可能是伪劣仿制品，请勿食用，请前往客服部申报</p>

	<br><h2 style="color:red;">@IF(isset($aresult['msg'])){!!$aresult['msg']!!}@ENDIF</h2><br>
	
	@IF(isset($aresult['report']))
	<span style="color:blue;">
    <h2>申报部</h2>
	<p>1、货品来源，卖家各字或店名＿＿＿＿电话＿＿＿＿地址＿＿＿＿＿</p>
	<p>２、购买数量＿＿＿＿盒，购买金额    1盒＿＿＿＿¥</p>
	<p>３、您的姓名和联系方式＿＿＿＿＿</p>
	</span>
	@ENDIF
	</td></tr></table>
	</center>
	</body>
</html>
