
<?php
include_once('connection.php');


$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where rec_id='$id'order by recDT desc";
$dd=mysql_query($sql);
$strSQL = "SELECT attachment FROM usermail where rec_id='$id' ";
    $row = mysql_fetch_assoc($result); 
echo "<div style='margin-left:10px;width:640px;height:auto;border:0 solid red;'>";

	echo "<table border='0' width='900'>";
	echo "<tr><th>Check </th><th>Sender </th><th>Subject </th><th>attachment</th><th>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr>";
	echo "<form>";
	echo "<td><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='HomePage.php?coninb=$mid'>".$s."</a></td>";
	echo "<td>".$a."</td>";
	echo "<td>".$d."</td>";
	
	//echo "<td>".$row['name']."</tr>";	
	}
	echo "</table>";
	
	
/*$ch=$_GET['ch'];
foreach($ch as $v)
{

}*/
	


?>
<input type='submit' class="btn btn-warning"value='Delete' name='delete'/>
</div></form>