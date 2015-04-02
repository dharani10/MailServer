<?php
include('head.php');
include_once('connection.php');

$file=$_FILES['file']['name'];

$id=$_SESSION['sid'];

if(@$_REQUEST['upd'])
{
	if($_POST['title']=="" || $_POST['cont']=="" )
	{
	$err= "<center><h3>FILL  THE  RELATED  DATA  FIRST";
	}
	
	else
	{
		mysql_query("INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())");
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "latestUpdates/" . $_FILES["file"]["name"]);
		$err= "<center><h3>UPDATED  LATEST  updated PIC";
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
<center>
<table width="506" border="0">
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">Title</th>
    <td width="277">
	<input type="text" name="title"  required/>	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Contents</th>
    <td><textarea rows="10" name="cont" cols="30" required></textarea></td>
  </tr>
  <tr><td>
  	
  </td></tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="reset" class="btn btn-warning" value="RESET"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-success" name="upd"  value="UPDATE"/></th>
  </tr>
  </table>
  </center>


</body>
</form>
</html>
