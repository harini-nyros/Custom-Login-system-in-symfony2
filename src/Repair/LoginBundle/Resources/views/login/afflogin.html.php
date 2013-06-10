<?php
if(isset($_POST['status']))
{
$status=$_POST['status'];
}
?><html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>" type="text/css" />
<script src="../src/Repair/LoginBundle/Resources/public/js/jquery.js"></script>
<style>
label
{
	width:94px;
	float:left;
	color:white;
	text-transform:capitalize;
	margin-left:50px;
}
li
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
ul
{
	margin-right:25px;
	margin-top: 0px;
	float: right;
}
#main
{
	background:#1B8A9B;
	margin-left:auto;
	margin-right:auto;
	margin-top: 58px;
	height: 260px;
	
}
#main h3
{
	color:white;
	margin-left:200px;
	margin-top:20px;
}
#submit
{
	margin-top:30px;
	margin-left:162px;
}
#main input
{
	height:28px;
	width:180px;
}
#midle
{
	height:500px;

}
.error
{
	margin-left: 137px;
	color:red;
}

</style>
</head>
<body>
<!--<?php echo $view->render('RepairLoginBundle:login:header.html.php') ?>-->
<div class="row" id="midle">
<div class="container">
<div>
<a href="<?php echo $view['router']->generate('index') ?>">Back</a>
</div>
<div class="span8" id="main">
<h3><?php echo $status ?> Login</h3>
<form action="" method="post" class="form-inline">
    	    <?php echo $view['form']->row($form['username'])?>
    	    <?php echo $view['form']->row($form['password'])?>
            <?php echo $view['form']->rest($form) ?>
   	  <input type="submit" class="btn btn btn-info" value="submit" id="submit" style="width:90px">
        </form>
   <?php if ($error):?>
    <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
<!--end of span8-->
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
<!--<?php echo $view->render('RepairLoginBundle:login:footer.html.php') ?>-->
</body>
</html>
