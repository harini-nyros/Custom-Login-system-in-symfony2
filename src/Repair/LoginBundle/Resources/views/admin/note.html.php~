<?php
 $id= $_GET['id'];
?><html>
<head>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<script src="<?php echo $view['assets']->getUrl('bundles/repairlogin/js/jquery.js')?>"></script>
<style>
label
{
	
	float:left;
	
}
#main input
{
	height:25px;
}
#main li
{
	list-style-type:none;
	color:red;
} 
#main ul
{
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
#send
{
	margin-top: 102px;
	margin-left: 44px;
}
</style>
<!--<script type="text/javascript">
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
</script>-->
</head>
<body>
<?php echo $view->render('RepairLoginBundle:admin:adminheader.html.php') ?>
<div class="row" id="midle">
<div class="container">
<div class="span6" id="main">
<h3>Add note</h3>
<form action=""method="post"    enctype="multipart/form-data" class="form-inline">
    	   <label>From</label><input type="text" name="from"><br>
	    <label>To</label><input type="text" name="to">
            <?php echo $view['form']->row($form['title']) ?>
            <?php echo $view['form']->row($form['note']) ?>
	    <label>attach file </label>
            <input type="file" name=attachfile value="attachfile">
   	  <input type="submit" class="btn btn btn-primary" id="send">
</form>
<!--end of span6-->
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
</body>
</html>
