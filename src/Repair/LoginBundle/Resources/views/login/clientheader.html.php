<style>
.nav-header
{
	background:#1B8A9B;
	height:150px;
}
.nav-header ul
{
	margin-top: 66px;
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

#main
{
	margin-top:25px;
}
h3
{
	color:white;
	
}
.float
{
	float:left;
}
.titleimage
{
	margin-left:auto;
	margin-right:auto;
}
.logo
{
	width:400px;


}
.logo span
{
	color: white;
	font-size: 15px;
	text-transform: capitalize;
	
}
.logo div
{
	margin-top:15px;
	float:left;

}
li
{
	list-style-type:none;
}
.logo img
{
	margin-left:-10px;
}
</style>
</head>
<div class="nav-header">
	<div class="float logo">
			
			<img src="../src/Repair/LoginBundle/Resources/public/images/logo.png" class="float">
			
			<div> 
				<span>company name</span>
				<br><span>Phone:xxxxxxxxxx</span>
				<br><span>Fax:xxxxxxxxxx</span>
			</div>
	</div>
	<div class="titleimage">
		<div class="float">
		<img src="../src/Repair/LoginBundle/Resources/public/images/affliate.png" >
		</div>
		<div>
			<h3>Client Panel</h3>
		</div>
	</div>
   	<ul class="nav nav-tabs">
  		<li><a href="<?php echo $view['router']->generate('clientsection')?>">Home</a></li>
		<li><a href="#">DisputeDetailes</a></li>
		<li><a href="<?php echo $view['router']->generate('clicreditinfo')?>">Creditinfo</a></li>
		<li><a href="#">messages</a></li>
		<li><a href="<?php echo $view['router']->generate('cliresources')?>">Resources</a></li>
  		<li class="logout"><a href="<?php echo $view['router']->generate('logout')?>">Logout</a></li>
	</ul>
</div><!--End of header-->

