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
<title>Add Accno</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/demo.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/base.css">
<style>
label
{
	width:75px;
	float:left;
	margin-left:20px;
	text-transform:capitalize;
}
#main li
{
	list-style-type:none;
	color:red;
}
#main ul
{
	margin-right: -60px;
	margin-top: 0px;
	float: right;
}
#submit
{
	margin-top:50px;
}
#footer
{
	height:50px;
	background:#E6E6E6;
}
#midle
{
	height:400px;
}
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:admin:adminheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<div class="span6" id="main">
<a href="<?php echo $view['router']->generate('panel')?>">Back</a>
<h3>Add Accno</h3>
<form action=""  method="post" class="form-inline" name='form'>
	    <?php echo $view['form']->row($form['accno']) ?>
	      <?php echo $view['form']->rest($form) ?>
<input type="submit" class="btn btn btn-primary" value="submit" id="submit">
</form>
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
</body>
</html>
<?php
}
?>
