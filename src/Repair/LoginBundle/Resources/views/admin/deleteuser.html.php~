<?php
$var=$app->getSession()->get('id');
$id= $_GET['id']; 
?>
<html>
<head>
<title>Delete user</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/demo.css">
<script src="../src/Repair/LoginBundle/Resources/public/js/jquery.js"></script>
<script src="../src/Repair/LoginBundle/Resources/public/js/bootstrap-modal.js"></script>
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
<a href="<?php echo $view['router']->generate('deleteuser',array('id'=>$id))?>"><input type="submit" value="ok" class="btn btn-success"></a> 
<a href="<?php echo $view['router']->generate('panel')?>" class="btn btn-btn">cancel</a>
</form> 
</div>  
</div>   
</div>
</body>
</html>
