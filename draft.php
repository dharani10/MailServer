<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM draft where user_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:0px;width:640px;height:auto;border:0px solid red;'>";

	echo "<table border='0' width='900'>";
	echo "<tr><th>Subject </th><th>Attachement </th><th>Message</th><th>Date</th></tr>";
while(list($draftId,$u_id,$sub,$file,$msg,$date)=mysql_fetch_array($dd))
{
	echo "<tr>";
	echo "<td>".$sub."</td>";
	
	echo "<td>".$file."</td>";
	echo "<td>".$msg."</td>";
	echo "<td>".$date."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	

echo "</div>";
	
echo "</form>";

?>
