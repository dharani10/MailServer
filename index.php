<?php
include('header.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
<script language="JavaScript1.1">
		<!--

		/*
		JavaScript Image slideshow:
		By JavaScript Kit (www.javascriptkit.com)
		Over 200+ free JavaScript here!
		*/

		var slideimages=new Array()
		var slidelinks=new Array()
		function slideshowimages(){
		for (i=0;i<slideshowimages.arguments.length;i++){
		slideimages[i]=new Image()
		slideimages[i].src=slideshowimages.arguments[i]
		}
		}

		function slideshowlinks(){
		for (i=0;i<slideshowlinks.arguments.length;i++)
		slidelinks[i]=slideshowlinks.arguments[i]
		}

		function gotoshow(){
		if (!window.winslide||winslide.closed)
		winslide=window.open(slidelinks[whichlink])
		else
		winslide.location=slidelinks[whichlink]
		winslide.focus()
		}

		//-->
		</script>
		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
		</style>
</head>

<body>

<div id="mainbody" style="border:0px groove pink;">
<table class="table table-condensed" width="975" border="0" align="center" style="background-image:url('slide image/dd.png');">
   <tr>
<td height="135" colspan="2"><br>
    <H1><center><img src="slide image\mail1.jpg" class='img-circle' style="width:80px;height:80px" >WELCOME TO MY MAIL...!!!!!!</center></H1>
    </td>
    </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php"><img src="slide image\home.jpg" class='img-circle' style="width:30px;height:30px" ><b>HOME</b></a>
		<a href="index.php?chk=3"><img src="slide image\login1.png" class='img-circle' style="width:40px;height:40px" ><b>LOGIN</b></a>
		<a href="index.php?chk=4"><img src="slide image\new1.jpg" class='img-circle' style="width:30px;height:30px" ><b>NEW USER</b></a>
	
		<a href="index.php?chk=6"><img src="slide image\for.jpg" class='img-circle' style="width:30px;height:30px" ><b>PASSWORD RECOVERY</b></a>
		<a href="index.php?chk=7"><img src="slide image\update.jpg" class='img-circle' style="width:30px;height:30px" ><b>LATEST UPDATE</b></a></td>
		
  </tr>
  <tr>
    <td height="400">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	

	<?php
	}
	if($chk==4)
	{
	include_once('regis.php');
	}
	if($chk==3)
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk==2)
	{
	include_once('aboutus.php');
	}
	if($chk==6)
	{
	include_once('chpass.php');
	}
	if($chk==7)
	{
	include_once('latestupdDisp.php');
	}
	
	
	?>	</td>
   
</table>
</div>
</body>
</html>
