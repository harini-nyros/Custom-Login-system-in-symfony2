<?php
$var=$app->getSession()->get('id');
?>
<html>
<head>
<title>Add user</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>"type="text/css"/>
<style>
label
{
	width:75px;
	float:left;
	margin-left:20px;
}
#main li
{
	list-style-type:none;
	color:red;
} 
.ele
{
	height:285px;
	
}
.ele input
{
	height:25px;
	width:185px;
}
#main ul
{
	margin-right: -58px;
	margin-top: 0px;
	float: right;
}
#midle
{
	height:400px;
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
<div class="row" id="midle">
<div class="container">
<div class="span6" id="main">
<a href="<?php echo $view['router']->generate('panel')?>">Back</a>
<h3>Add user</h3>
<form action=""  method="post" 
            <?php echo $view['form']->enctype($form) ?> class="form-inline">
	     <?php echo $view['form']->row($form['username']) ?>
    	    <?php echo $view['form']->row($form['password']) ?>
	    <?php echo $view['form']->row($form['name']) ?>
    	    <?php echo $view['form']->row($form['email']) ?>
	    <?php echo $view['form']->rest($form) ?>
  <input type="submit" class="btn btn btn-primary" value="submit">
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
