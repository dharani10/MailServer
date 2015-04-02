<?php
include('head.php');

include_once('connection.php');
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
$file=$_FILES['file']['name'];

$id=$_SESSION['sid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{

	$err="<H3>FILL  THE  RELATED  DATA  FIRST</H3>";
	}
	
	else
	{
	$d=mysql_query("SELECT * FROM userinfo where user_name='$to'");
	$row=mysql_num_rows($d);
	if($row==1)
		{
		mysql_query("INSERT INTO usermail values('','$to','$id','$sub','$msg','$file',sysdate())");
		$err= "<H3>MESSAGE  SENT...</H3>";
		} 
	else
		{
		$sub=$sub."--"."msg failed";
		mysql_query("INSERT INTO usermail values('','$id','$id','$sub','$msg','$file',sysdate())");
		$err= "<H3>MESSAGE  FAILED....</H3>";

		}	
	}
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>fill subject and msg first</font>";
	}
	
	else
	{
	$query="INSERT INTO draft values('','$id','$sub','$file','$msg',sysdate())";
	mysql_query($query);
	$err= "<center><h3>MAIL  SAVED..";
	}
}	

	
?>
<head>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<center><br>
<table width="506" border="0">
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to" />	</td>
  </tr>
 
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <th height="52" scope="row">Msg</th>
    <td><textarea rows="8" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
 
    <th height="35" colspan="2" scope="row">
    <br>
    <br>
	<input type="submit" class="btn btn-success" name="send" value="SEND"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" class="btn btn-primary"  name="save" value="SAVE"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" class="btn btn-warning" value="CANCEL"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	  </tr>

</table>
</center>
</body>
</form>
</html>
