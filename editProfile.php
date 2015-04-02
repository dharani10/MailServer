<br>
<br>
<br>
<?php
error_reporting(1);
$sid=$_SESSION['sid'];
include_once('connection.php');

$r=mysql_query("select * from userinfo where user_name='$sid'");
echo "<table border='1' align='center'>";
$row=mysql_fetch_object($r);
$p=$row->password;
$m=$row->mobile;
$e=$row->email;
echo "<tr height='40' width'40'>";
echo "<td><H4><b>USERID</H4></b></td>";
echo "<td><H4><b>".$row->user_jd."<H4><b></td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><H4><b>NAME<H4></b></td>";
echo "<td><b>".$row->user_name."<b></td>";
echo "</tr>";


echo "<tr height='40'>";
echo "<td><H4><b>MOBILE </td>";
echo "<td><H4><b>".$row->mobile."</td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><H4><b>EMAIL </td>";
echo "<td><H4><b>".$row->email."</td>";
echo "</tr>";

/*echo "<tr height='40'>";
echo "<td><H4><b>GENDER </td>";
echo "<td><H4><b>".$row->gender."</td>";
echo "</tr>";*/



echo "<tr height='40'>";
echo "<td><H4><b>DOB</td>";
echo "<td><H4><b>".$row->dob."</td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><H4><b>Pic </td>";
echo "<td><img alt='image not upload' src='userImages/$id/$file' height='80' width='80'/></td>";
echo "</tr>";

echo "</table>";
?>
