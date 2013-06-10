<html>
<head>
<title>login</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>" type="text/css" />
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.validate.js')?>"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/registerform.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() 
	{
		$("#submit").click(function()
				{
					$("#registerform").validate();
				
				});



	});

</script>
<style>
#midle
{
	background:#FFFFFF;
	height:600px;
}
label
{
	width:94px;
	float:left;
	margin-left:20px;
	color:white;
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
	margin-right: -58px;
	margin-top: 0px;
	float: right;
}
#loginmenu
{
	border: 1px solid black;
	margin-top: 44px;
	height: 190px;
}
#submit
{
	margin-top: 20px;
	margin-left: 228px;
	
	
}
.error
{
	width: 203px;
	color:red;


}
h3
{
	margin-left: 22px;
	color:white;
}
select.error, textarea.error, input.error {
    color:#FF0000;
}
#main
{
	background:#1B8A9B;
	margin-left: 182px;
	margin-top: 58px;
	height: 260px;
	
}
#main h3
{
	margin-left: 139px;
	margin-top:26px;
	color:white;
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
<div class="span7" id="main">
	<h3> Login Section</h3>
	<form action="" method="post"  class="form-inline" id="registerform">
   		 <label class="control-label">Login As:</label>
      		<label class="radio inline">
  					<input  type="radio" name="logins" value="iam Affliate"
		 class="required" />Iam Affliate
		</label>
	
			<label class="radio inline">
		  		<input  type="radio" name="logins" value="iam Client" />Iam Client
			</label>

      			<label class="radio inline">
  				<input  type="radio" name="logins" value="iam admin"
		  />Iam admin
			</label>
		<div style="clear:both"></div>
	<div>
 	<input type="submit" class="btn btn btn-info" value="submit" id="submit">
	</div>
</form>
</div><!--End of main>
<!--end of container-->
</div>
<!--end of row-->
</div>
<!--<?php echo $view->render('RepairLoginBundle:login:footer.html.php') ?>-->
</body>
</html>
