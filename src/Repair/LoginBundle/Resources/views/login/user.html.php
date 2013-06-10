<?php
$var=$app->getSession()->get('id');
$arrlength=count($res);
$nm=$name[0]['username'];
if($nm == 'null')
{
	$nm='Admin';
}
?>
<xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta name="viewport" content="width=996px"/>
<title>Angular Gauge (Revenue Chart)</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link  href="../src/Repair/LoginBundle/Resources/public/css/style.css" rel="stylesheet" type="text/css" />
<link  href="../src/Repair/LoginBundle/Resources/public/css/prettify.css" rel="stylesheet" type="text/css">        
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/jquery.min.js"></script>
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/FusionCharts.js"></script>
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/prettify.js"></script>
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/json2.js"></script>
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/lib.js" ></script>
<style>
#midle
{
	height:800px;
	width:1100px;
}
#contactdiv
{
	border: 4px groove grey;
	border-radius: 12px;
	margin-top: 25px;
	height:255px;
	
}

#contactheader
{
	height: 40px;
	background: #1B8A9B;
	border-top-left-radius: 10px;
	border-top-right-radius: 9px;
	padding-top: 10px;

}
#contactdiv h4
{
	margin-left:25px;
	color:white;
}
.contacttxt
{
	margin-top:5px;
	margin-left: 10px;
	text-align: left;
	width: 138px;
	
}
.contactinfo
{
	margin-left:25px;
	margin-top:17px;
}
.contactinfo div
{
	float:left;
}
#chartdiv
{
	
	margin-top:20px;
}
.clientinfo
{
	margin-top:20px;
	border: 4px groove grey;
	width:400px;
	height:300px;
	margin-left:30px;
	border-radius:28px;
}
.main div
{
	float:left;
	
}
.heading
{
	background:#1B8A9B;
	height:45px;
	color:white;
	width:400px;
	border-top-left-radius: 26px;
	border-top-right-radius: 26px;
}
.heading span
{
	color: white;
	font-size: 28px;
	margin-top: 31px;
	margin-left: 103px;
	line-height: 39px;
}
.detailes p
{
	margin-left:30px;
	color:black;
	font-size:18px;
}
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:login:clientheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<div class="main">
<script type="text/javascript" src="../src/Repair/LoginBundle/Resources/public/js/Angular7.js" ></script>
 	<div id="chartdiv" align="center">Chart will load here</div>
        <script type="text/javascript">
            var chart = new FusionCharts("../src/Repair/LoginBundle/Resources/public/Charts/AngularGauge.swf", "ChartId", "450", "400");
            chart.setXMLData(dataString);
            chart.render("chartdiv");
        </script>
<div class="clientinfo">
<div class="heading"><span>Client Detailes<span></div>
<div class="detailes">
	<?php
	 
        			  $id=$res[0]['id'];
				  $uname=$res[0]['username'];
        			  $password=$res[0]['password'];
				  $name=$res[0]['name'];
        			  $mail=$res[0]['email'];
				  $score=$res[0]['score'];
		
	
?>
<p>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name?></p>
<p>Mailid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mail?></p>
<p>Score:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $score?></p>
<p>Reffered By <br><br>
	<?php echo $nm ;?>
</p>	
</div><!--closing of detailes div-->		
</div><!--closing od client info-->
</div>
<div class="span8" id="contactdiv">
	<div style="clear:both"></div>
	<div id="contactheader">
		<h4>Contacts</h4>
	</div>
	<div class="contactinfo">
		<div>
			<img src="../src/Repair/LoginBundle/Resources/public/images/default.png">
				<div class="contacttxt">
					<span class="text-date"><?php echo $nm ;?></span>
						<br><span>Tel:123-555-1111</span>
						<br><span>Fax:123-555-2222</span>
				</div>
		</div>
		<div>
			<img src="../src/Repair/LoginBundle/Resources/public/images/default.png">
				<div class="contacttxt">
					<span class="text-date">Admin</span>
						<br><span>Tel:123-444-1111</span>
						<br><span>Fax:123-222-2222</span>
				</div>
		</div>
		
	</div>
</div><!--End of span8-->
</div>
</div>
</body>
</html>
