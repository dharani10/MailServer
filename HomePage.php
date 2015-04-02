<?php
 include('header.php');

session_start();
if($_SESSION['sid']=="")
{
header('Location:index.php');
}
$id=$_SESSION['sid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
<style>
	a{text-decoration:none}
	a:hover{ background-color:#00CC66}
	#atop{margin-left:50}
</style>
</head>

<body>
<header id="top" class="header">
<div id="mainbody" style="border:0px groove pink;">
<table class="table table-condensed" width="975" border="1" align="center" style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['conTheme'];
		if($conTheme)
		{
			$fo=fopen("userImages/$id/theme","w");
			fwrite($fo,$conTheme);
		}
			@$f=fopen("userImages/$id/theme","r");
			@$fr=fread($f, filesize("userImages/$id/theme"));
			echo $fr;
			?>');">
  
  <tr>
    <td height="115" colspan="3" align="center">
	<div  style="float:left;">
	<?php
	include_once('connection.php');
	error_reporting(1);
	
	$chk=$_GET['chk'];
	if($chk=="logout")
	{
	unset($_SESSION['sid']);
	header('Location:index.php');
	}
	$r=mysql_query("select * from userinfo where user_name='{$_SESSION['sid']}'");
	
	$row=mysql_fetch_object($r);
	@$file=$row->image;
	//echo $file;
	//<img src="..." alt="..." class="img-circle">
      // echo "<img alt='image not upload' src='userImages/$id/$file' class='img-circle'>";
	echo "<img alt='image not upload' src='userImages/$id/$file' class='img-circle' height='120' width='120'/>";
?></div>
	
	 <div style="float:left;margin-left:300px;padding-top:40px;font-size:25px;text-align:center;color:#FFFF00"><h1><b>Welcome <?php  echo @$_SESSION['sid'];?></b></h1>
	 </div>
 	  </td>
  </tr>
  <tr>
    <td height="38" colspan="3">
		<a style="margin-left:50px"  href="HomePage.php?chk=chngthm"><img src="slide image\theme.jpg" class='img-circle' style="width:25px;height:25px" ><b>CHANGE THEME</b></a>
		<a style="margin-left:50px"  href="HomePage.php?chk=chngPass"><img src="slide image\ch.jpg" class='img-circle' style="width:25px;height:25px" ><b>CHANGE PASSWORD</b></a>
		
		<a style="margin-left:50px" href="HomePage.php?chk=vprofile"><img src="slide image\pro.jpg" class='img-circle' style="width:25px;height:25px" ><b>PROFILE DETAILS</b></a>
		
		<a style="margin-left:50px" href="HomePage.php?chk=updnews"><img src="slide image\lat.jpg" class='img-circle' style="width:25px;height:25px" ><b>UPDATE LATEST NEWS</b></a>
		<a style="margin-left:50px" href="HomePage.php?chk=logout"><img src="slide image\logout3.png" class='img-circle' style="width:25px;height:25px" ><b>LOGOUT</a>
		
	</td>
  </tr>
  <tr>
    <td width="90" height="500" valign="top">
	<div style="margin-top:50px"><a href="HomePage.php?chk=compose"><img src="slide image\compose..jpg" class='img-circle' style="width:25px;height:25px" ><b>COMPOSE</a><br/><br/>
	<a href="HomePage.php?chk=inbox"><img src="slide image\inbox.jpg" class='img-circle' style="width:25px;height:25px" ><b>INBOX</b></a><br/><br/>
	
	<a href="HomePage.php?chk=sent"><img src="slide image\sent.jpg" class='img-circle' style="width:25px;height:25px" ><b>SENT</b></a><br/><br/>
	<a href="HomePage.php?chk=draft"><img src="slide image\draft.jpg" class='img-circle' style="width:25px;height:25px" ><b>DRAFT</b></a>
	
	</div>
	</td>
    <td  height="500" width="400" valign="top">
			
			
		<?php
		@$id=$_SESSION['sid'];
		@$chk=$_REQUEST['chk'];
			if($chk=="vprofile")
			{
			include_once("editProfile.php");
			}
			if($chk=="compose")
			{
			include_once('compose.php');
			}
			if($chk=="sent")
			{
			include_once('sent.php');
			}
			if($chk=="inbox")
			{
			include_once('inbox.php');
			}
			if($chk=="setting")
			{
			include_once('setting.php');
			}
			if($chk=="chngPass")
			{
			include_once('chngPass.php');
			}
			if($chk=="chngthm")
			{
			include_once('chngthm.php');
			}
			if($chk=="draft")
			{
			include_once('draft.php');
			}
			if($chk=="updnews")
			{
			include_once('latestupd.php');
			}
			
		?>
		
		<!--inbox -->
		<?php
		$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
			$sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
$dd=mysql_query($sql);
			$row=mysql_fetch_object($dd);
			echo "sent to:".$row->sen_id."<br/><br/>";
			echo "Subject :".$row->sub."<br/><br/>";
			echo "Message :".$row->msg."<br/><br/>";
			$var =$row->attachement;
			//echo "attachment :".'<a href=<?php $var'.$var."<br/>";
			echo "attachment :".'<a href="http://localhost/Mailserver/attach/'.$var.'">'.$var.'</a>';
			//echo '<button type="button" onclick="location.href="download.php"">Download </button>';
			}
			
			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		
		$d="DELETE from usermail where mail_id='$v'";
		mysql_query($d);
		} 
         
		echo "<center><h3>MAIL DELETED";
	}
			
		?>
		
		
		
	<!--sent box-->
	<?php
		$id=$_SESSION['sid'];
		@$consent=$_GET['consent'];
			
			if($consent)
			{
			$sql="SELECT * FROM usermail where sen_id='$id' and mail_id='$consent'";
$dd=mysql_query($sql);
			$row=mysql_fetch_object($dd);
			echo "sent to:".$row->rec_id."<br/><br/>";
			echo "Subject :".$row->sub."<br/><br/>";
			echo "Message :".$row->msg."<br/><br/>";
			$var =$row->attachement;
			echo "attachment :".'<a href="http://localhost/Mailserver/attach/'.$var.'">'.$var.'</a>';
			}
			
			
	//@$cheklist=$_REQUEST['ch'];
	//if(isset($_GET['delete']))
	//{
		//foreach($cheklist as $v)
		//{
		//$d="DELETE from usermail where mail_id='$v'";
		//mysql_query($d);
		//}
		//echo "msg deleted";
	//}
			
		?>	
		
	</td>

 
</table>
</div>
</body>
</html>
