<?php
$var=$app->getSession()->get('id');
if(!isset($var))
{
  echo $view['actions']->render(new \Symfony\Component\HttpKernel\Controller\ControllerReference('RepairLoginBundle:Login:login')); 
}
else
{
?><html>
<head>
<title>Add Score</title>
<title>Edit user</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>" type="text/css" />
<script src="../src/Repair/LoginBundle/Resources/public/js/login.js"></script>
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
</style>
</head>
<body>
<div class="row" id="midle">
<div class="container">
<div class="span6">
<a href="<?php echo $view['router']->generate('panel')?>">Back</a>
<h3>Add score</h3>
<form action=""  method="post"  class="form-inline" name='file' onsubmit="return addscore();">
	    <?php echo $view['form']->row($form['score']) ?>
<input type="submit" class="btn btn btn-primary" value="submit">
</form>
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
<script type="text/javascript">
function addscore()
{
	if(document.getElementById("form_score").value =='')
	{
		alert("please Enter the score");
		return false;
	}
        else if((document.getElementById("form_score").value) > 850 || (document.getElementById("form_score").value) < 300)
	{
		 alert('Please Enter score between 300 to 850');
                 document.getElementById("form_score").focus();
                  return false;
	}
	else
	{	
		return true;
	}

}
</script>
</body>
</html>
<?php
}
?>
