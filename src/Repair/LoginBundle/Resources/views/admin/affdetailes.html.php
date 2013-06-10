<?php
$var=$app->getSession()->get('id');
$arrlength=count($query);
?>	
<html>
<head>
<title>Users</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo_table.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo_table_jui.css')?>"type="text/css"/>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.dataTables.js')?>"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/paging.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() 
	{

		var obj=$('#example').dataTable({
								"bJQueryUI": true,
								"aLengthMenu": [5, 10,15,20],
			 					"iDisplayLength":5,
								"bPaginate":true,
			 					"sPaginationType": "bootstrap",
								"sDom":'<"top"fls>rt<"bottom"p><"clear">',
                       				 		"bFilter":true,
         					});
});
</script>
<style>

td
{
	font-size:15px;
}
.top,.bottom
{
	border:none;
	background:none;
}
tr.even td.sorting_1
{
	background:none;
}
#midle
{
	height:700px;
}
#example_filter input
{
	height: 30px;
	width: 206px;
}
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:admin:adminheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<a href="<?php echo $view['router']->generate('adduser')?>">Add user</a>
<table border="1"  id="example" class="table table-striped rounded-corner table-hover" id="example">
<thead>
	<tr>
		<th>UserName</th>
		<th>Email</th>
		<th>Delete</th>
		<th>Status</th>
	</tr>
</thead>
<tbody>
<?php
for($i=0;$i<$arrlength;$i++)
  	{
		$id=$query[$i]['id'];
		$name=$query[$i]['username'];
		$mail=$query[$i]['email'];
		$status=$query[$i]['status'];


?>
	<tr>
		<td><?php echo $name?></td>
		<td><?php echo $mail?></td>
		<td><a href="<?php echo $view['router']->generate('deleteaff',array('id'=>$id,))?>">Delete</a>
<?php           if($status =='0')
		{
?>
                			<td>InActive</td>
<?php
	        }
		else
		{
?>					<td>Active</td>
<?php
		}
?>
	</tr>
<?php
		
      }
?>
</tbody>
</table>
</div><!--End of container-->
</div><!--End of midle row-->
<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
</body>
</html>

