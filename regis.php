<?php
session_start();
include_once('connection.php');
error_reporting(1);
$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$dob=$y."-".$m."-".$d;
$ch=$_POST['ch'];
$hobbies=implode(",",$ch);
$imgpath=$_FILES['file']['name'];
$un=$_POST['un'];
if($_POST['reg'])
{
	if($_POST['un']=="" || $_POST['pwd']=="")
	{
	$err="<CENTER><H3>FILL  YOUR  DETAILS  FIRST</H3></CENTER>";
	}
	else
	{
	$r=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['un']}'");
	$t=mysql_num_rows($r);
		if($t==1)
		{
		$err="<CENTER><h3>USER  ALREADY  EXISTS</h3></CENTER>";
		}
		else
		{
		mysql_query("INSERT INTO userinfo values('','{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','$hobbies','$dob',
		'$imgpath')");
		mkdir("userImages/$un");
		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);
		$_SESSION['sname']=$_POST['un'];
		header('location:index.php?chk=5');
		}
	}
}

?>
<form method="post" enctype="multipart/form-data">
<table width="438" border="0" align="center">
  <font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td height="39">Enter Email </td>
    <td><input type="email"placeholder="name@" name="eid"/></td>
  </tr>
  <tr>
    <td width="204" height="47">Enter User Name </td>
    <td width="218"><input type="text"placeholder="name" name="un"/></td>
  </tr>
  <tr>
    <td height="39">Enter Password </td>
    <td><input type="password"placeholder="password" name="pwd"/></td>
  </tr>
  <tr>
    <td height="45">Enter Mobileno </td>
    <td><input type="text" placeholder="mobile" name="mob" min="0" max="9" maxlength="10"/></td>
  </tr>
  
  <tr>
    <td height="33">Select Gender </td>
    <td>
		Male<input type="radio" name="gen" value="male"/>
		Female<input type="radio" name="gen" value="female"/>
	</td>
  </tr>
 
  <tr>
    <td height="38">Select Your DOB </td>
    <td>
		<select name="y">
			<option value="">Year</option>
			<?php
			for($i=1900;$i<=2013;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="m">
			<option value="">Month</option>
			<?php
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="d">
			<option value="">Date</option>
			<?php
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td height="55">Upload Your Pic</td>
    <td>
	<input type="file" name="file"/>
	</td>
  </tr>
 
  <tr>
    <td height="30">I accept term & condition</td>
    <td>
	<input type="checkbox" name="checklist"/>
	</td>
  <tr>
    <td align="center" colspan="2">
	<input type="submit" class="btn btn-success"name="reg" value="REGISTER"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"  class="btn btn-info"value="RESET"/>
	</td>
  </tr>
</table>
</form>i