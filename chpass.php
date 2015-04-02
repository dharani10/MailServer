<?php
include('header.php');
include_once('connection.php');
error_reporting(1);
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$un=$_POST['un'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{
		$sql="select * from userinfo where user_name ='$un'";
		$d=mysql_query($sql);
		list($a,$b,$c)=mysql_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{
			$sql="update userinfo set password='$np' where user_name='$un'";
		$d=mysql_query($sql);
		echo "pass updated...";
			}
			
			else
			{
			echo "new pass doesn't match to confirm pass";
			}
		}
		else
		{
		echo "wrong old password";
		}
	}
		
}
?>
<body>
<form method="post">

<center>
<table width="365" border="0">
  <tr><br><br>
  <?php echo $err; ?>
    <th width="173" scope="row">Old Password </th>
    <td width="176">
		<input type="password" placeholder="old" name="op"/>
	</td>
  </tr>
  <br>
  <tr>
    <th scope="row">User Name</th>
    <td>
			<input type="text" placeholder="name" name="un"/>
	</td>
  </tr>
  <br>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" placeholder="new" name="np"/>
	</td>
  </tr>
  <br>
  <tr>
      <th scope="row">Confirm Password </th>
    <td><input type="password" placeholder="confrm new"name="cp"/>
    <br></td>
  </tr>
<tr>
    <td colspan="2" align="center">
    <br>
	<input type="submit" class="btn btn-success"name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</center>
</form>
</body>


 