<?php
?>
<html>
<head>
<title>Credit Info</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/demo_table.css">
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
<?php echo $view->render('RepairLoginBundle:login:creditinformation.html.php') ?>

<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
</body>
</html>
