<?php
$var=$app->getSession()->get('id');
$arrlength=count($result);
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
#contactdiv
{
	border: 4px groove grey;
	border-radius: 12px;
	margin-top: 25px;
	height:255px;
}
h4
{
	margin-left:25px;
}
.contacttxt
{
	margin-top:5px;
	margin-left: 10px;
	text-align: left;
	width: 138px;
	
}
.contactinfo
{
	margin-left:25px;
}
#footer
{
	height:50px;
	background:#E6E6E6;
}
select
{
	width:50px;
}
input
{
	height:30px;
	width:120px;
}
#contactdiv
{
	border: 4px groove grey;
	border-radius: 12px;
	margin-top: 25px;
	height:255px;
	
}

#contactheader
{
	height: 40px;
	background: #1B8A9B;
	border-top-left-radius: 10px;
	border-top-right-radius: 9px;
	padding-top: 10px;

}
#contactdiv h4
{
	margin-left:25px;
	color:white;
}
.contacttxt
{
	margin-top:5px;
	margin-left: 10px;
	text-align: left;
	width: 138px;
	
}
.contactinfo
{
	margin-left:25px;
	margin-top:17px;
}
.contactinfo div
{
	float:left;
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
#choices
{
	width:150px;
	height:28px;
	float:right;
	margin-top:5px;
}
</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:admin:adminheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<a href="<?php echo $view['router']->generate('adduser')?>">Add user</a>
<a href="<?php echo $view['router']->generate('addadminaff')?>">Add Affliate</a>
<table border="1"  id="example" class="table table-striped rounded-corner table-hover" id="example">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>status</th>
<th>Affliate</th>
<th>operations</th>
<th>Delete user</th>
<th>Edit user</th>
<th>Upload File</th>
<th>Add Acc no</th>
<th>Add score</th>
<th>Add Affliate</th>
</tr>
</thead>
<tbody>
<?php
for($i=0;$i<$arrlength;$i++)
  	{
		//$len=count($result[$i]);
		$id=$result[$i]['id'];
		$name=$result[$i]['username'];
		$mail=$result[$i]['email'];
		$pid=$result[$i]['parentid'];
		$status=$result[$i]['status'];
	 	/*for($j=0;$j<$len;$j++)
		{
			$id=$result[$i][$j]['id'];
			$name=$result[$i][$j]['name'];
			$mail=$result[$i][$j]['email'];
			$pid=$result[$i][$j]['parentid'];
			echo $pid;*/
?>
		<tr>
		<td><?php echo $name?></td>
                <td><?php echo $mail?></td>
<?php           if($status =='0')
		{
?>
                <td>InActive</td>
<?php
	        }
else
		{
?>		<td>Active</td>
<?php
		}
		if($pid=='0')
		{
?>
		<td>Not</td>
<?php
		}
                else
		{
		
?>
		<td>Assigned</td>
<?php
		}
?>
		<td><a href="<?php echo $view['router']->generate('note',array('id'=>$id))?>">Send Note</a></td>
     <td><a href="<?php echo $view['router']->generate('deleteuser',array('id'=>$id,))?>">Delete</a></td>
     <td><a href="<?php echo $view['router']->generate('edituser',array('id'=>$id))?>">Edit</a></td>
     <td><a href="<?php echo $view['router']->generate('upload',array('id'=>$id))?>">Upload</a></td>
     <td><a href="<?php echo $view['router']->generate('addaccno',array('id'=>$id))?>">Add</a></td>
      <td><a href="<?php echo $view['router']->generate('score',array('id'=>$id))?>">Add</a></td>
      <td><a href="<?php echo $view['router']->generate('addaff',array('id'=>$id))?>">Add</a></td>
               </tr>
<?php
		
      }
?>
</tbody>
</table>
<div id="result"></div>
<div class="span8" id="contactdiv">
	<div style="clear:both"></div>
	<div id="contactheader">
		<h4>Contacts</h4>
	</div>
	<div class="contactinfo">
			<div>
				<img src="<?php echo $view['assets']->getUrl('bundles/repairlogin/images/default.png')?>">
				<div class="contacttxt">
					<span class="text-date">Admin</span>
						<br><span>Tel:123-444-1111</span>
						<br><span>Fax:123-222-2222</span>
				</div>
		</div>
	</div>
</div><!--End of span8-->
</div><!--End of container-->
</div><!--End of midle row-->
<div class="footer" id="footer">
		<h5>©2012-2013 All rights reserved</h5>
</div>
</body>
</html>
