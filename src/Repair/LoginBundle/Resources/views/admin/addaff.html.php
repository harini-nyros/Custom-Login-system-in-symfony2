<?php
$reslength=count($result);
?>
<html>
<head>
<title>login</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>" type="text/css" />
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<style>
#message
{
	color:red;
}
#midle
{
	height:400px;
}
#main
{
	margin-top:20px;
	
}
#footer
{
	height:50px;
	background:#E6E6E6;
}
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:admin:adminheader.html.php') ?>
<h1>Add Affliates to clients</h1>
<div class="row" id="midle">
<div class="container">
<div class="span8" id="main">
<a href="<?php echo $view['router']->generate('panel')?>">Back</a>
<form action="" method="post"  class="form-inline" id="registerform" onsubmit="return selctvalidate();">
 <select  name="affliate" id="select">
<option value="0">Select Affliate</option>
<?php	
	for($i=1;$i<=$reslength-1;$i++)
	{
        $id=$result[$i]['id'];
	$name=$result[$i]['username'];
?>
	<option value="<?php echo $id;?>"><?php echo $name ;?></option>
<?php
	}
?>
</select>
<input type="submit" value="submit" id="submit" class="btn btn-info" >
<span id="message"></span>
</form>
</div>
</div>
</div>
<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
<script type="text/javascript">
function selctvalidate()
{
a=document.getElementById("select").value;
if(a =='0')
{
		document.getElementById("message").innerHTML="please select the any option";
		return false;
}
return true;
}
</script>
</body>
</html>

