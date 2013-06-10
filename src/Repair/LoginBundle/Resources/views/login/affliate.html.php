<?php
$var=$app->getSession()->get('id');
$arrlength=count($res);
?>
<html>
<head>
<title>User Details</title>
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
			 "bPaginate":true,
			 "sPaginationType":"full_numbers",
			"sDom":'<"top"fls>rt<"bottom"p><"clear">',
                        "bFilter":true,
         });
});
</script>
<style>
#footer
{
	height:50px;
	background:#E6E6E6;
}
.nav-header
{
	background:#274D9D;
	height:130px;
}
.nav-header ul
{
	margin-top: 45px;
}
.nav-header a
{
	font-size:14px;
	color:white;
}
.nav-header a:hover
{
	color:black;
}
.logout
{
	float: right !important;


}
#midle
{
	height:700px;
}
#main
{
	margin-top:25px;
}
h3
{
	color:white;
	margin-left: 388px;
}
h5
{
float: right !important;

}
.top,.bottom
{
	border:none;
	background:none;
}
#contactdiv
{
	border: 4px groove grey;
	border-radius: 12px;
	margin-top: 25px;
	height:255px;
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
tr.even td.sorting_1
{
	background:none;
}
#example_filter input
{
	height: 30px;
	width: 206px;
}
</style>
</head>
<body>
 <?php echo $view->render('RepairLoginBundle:login:affliateheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<div class="span12" id="main">
	<table border="0"  id="example" class="table table-striped table-hover" id="example">
		<thead>
			<tr class="names">
				<th>UserName</th>
				<th>Password</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
<?php
		for($i=0;$i<$arrlength;$i++)
  		{
	 
          			$id=$res[$i]['id'];
	  			$uname=$res[$i]['username'];
	  			$name=$res[$i]['password'];
				$status=$res[$i]['status'];
?>
			<tr class="grade X odd">
				<td><?php echo $uname?></td>
				<td><?php echo $name?></td>
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
</div><!--End of span12-->
<div class="span8" id="contactdiv">
	<div id="contactheader">
		<h4>Contacts</h4>
	</div>
	<div class="contactinfo">
		<div>
			<img src="<?php echo $view['assets']->getUrl('bundles/repairlogin/images/default.png')?>">
				<div class="contacttxt">
					<span class="text-date"><?php echo $username;?></span>
						<br><span>Tel:123-555-1111</span>
						<br><span>Fax:123-555-2222</span>
				</div>
		</div>
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
