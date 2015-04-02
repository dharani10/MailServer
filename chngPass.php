<?php
include('head.php');
include_once('connection.php');
error_reporting(1);
$id=$_SESSION['sid'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="<center><h3>FILL  ALL  THE FIELDS  FIRST</center></h3>";
	}
	else
	{
		$sql="select * from userinfo where user_name ='$id'";
		$d=mysql_query($sql);
		list($a,$b,$c)=mysql_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{
			$sql="update userinfo set password='$np' where user_name='$id'";
		$d=mysql_query($sql);
		
		echo "<center><h3>PASSWORD UPDATED</center></h3>";
			}
			
			else
			{
			echo "<center><h3>NEW  PASSWORD DOESNT  MATCH  TO  CONFIRM  PASSWORD</center></h3>";
			}
		}
		else
		{
		echo "<center><h3>WRONG  OLD  PASSWORD</h3></center>";
		}
	}
		
}
?>
<body>
<form method="post">
<center><br/><br/>
<table width="365" border="0">
  <tr>
  <?php echo $err; ?>
    <th width="173" scope="row">Old Password </th>
    <td width="176">
		<input type="password"placeholder="old" name="op"/>
	</td>
  </tr>
  <tr></tr>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" placeholder="new" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Password </th>
    <td><input type="password" placeholder="confrm" name="cp"/></td>
  </tr>
<tr>
    <td colspan="2" align="center"><br>
	<input type="submit" class="btn btn-success"name="chngP" value="Change Password"/></td>
	<br>
  </tr>
  
</table>
</center>
</form>
</body>
