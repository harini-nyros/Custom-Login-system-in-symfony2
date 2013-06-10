<?php
$var=$app->getSession()->get('id');
$id= $_GET['id']; 
?>
<html>
<head>
<title>Delete user</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css"/>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/bootstrap-modal.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() 
	{
		$("#example").show();


	});


</script>
</head>
<body>
<div class="container">  
<input type="hidden" name="delete"  id="delete">
<div id="example" class="modal hide fade in">  
<div class="modal-header">  
</div>  
<div class="modal-body">  
<h4>Do you want permanently delete the record</h4>                  
</div>  
<div class="modal-footer">
<form name="myform" method="post" action="">  
<a href="<?php echo $view['router']->generate('deleteaff',array('id'=>$id))?>"><input type="submit" value="ok" class="btn btn-success"></a> 
<a href="<?php echo $view['router']->generate('affdetailes')?>" class="btn btn-btn">cancel</a>
</form> 
</div>  
</div>   
</div>
</body>
</html>
