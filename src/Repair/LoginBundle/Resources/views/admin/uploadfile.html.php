<?php
$var=$app->getSession()->get('id');
?>
<html>
<head>
<title>upload file</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/demo.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/base.css">
<script src="../src/Repair/LoginBundle/Resources/public/js/login.js"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function()
		{	
			$("#more").click(function()
					
					{
						$('#move').animate({height: '+=50'}, 500);





					});



		});			
</script>
<style>
label
{
	width:80px;
}
#dvFile
{
	margin-left: 84px;
        height: 100px;
        margin-top: -23px;

}
#message
{
	color:red;
	float:right;
	margin-top:-43px;
}
</style>
</head>
<body>
<div class="row" id="midle">
<div class="container">
<div class="span6">
<a href="<?php echo $view['router']->generate('panel')?>">Back</a>
<h3>upload file</h3>
<form action=""  method="post" 
    <?php echo $view['form']->enctype($form) ?> class="form-inline" name='file' onsubmit="return selctvalidate();">
	    <?php echo $view['form']->row($form['files']) ?>
	    <?php echo $view['form']->rest($form) ?>
<span id="message"></span>
<div id="dvFile">
</div>
<div id="move">
	<a href="#" onClick="addbuttns();" id="more">Click To Add more</a>
	<input type="submit" class="btn btn btn-primary" value="submit" id="submit">
</div>
</form>
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
<script type="text/javascript">
function addbuttns()
{	
 var txt = "<br><input type='file' name='files[]'><br><input type='file' name='files[]'>";
  document.getElementById("dvFile").innerHTML += txt;
document.getElementById("submit").style.marginTop +=50 +'px';
}
function selctvalidate()
{
	 var a=document.getElementById("form_files").value;
if(a =='')
{
		document.getElementById("message").innerHTML="please choose the file";
		return false;
}
return true;
}



</script>
</body>
</html>
