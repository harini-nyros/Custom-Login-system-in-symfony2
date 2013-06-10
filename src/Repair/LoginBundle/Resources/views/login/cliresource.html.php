<?php
?>
<html>
<head>
<title>Resources</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo_table.css')?>"type="text/css"/>
<style>

.float
{
	float:left;
}

#footer
{
	height:50px;
	background:#E6E6E6;
}	
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:login:clientheader.html.php') ?>
<?php echo $view->render('RepairLoginBundle:login:resources.html.php') ?>

<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
</body>
</html>
