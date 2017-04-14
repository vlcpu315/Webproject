<?php
$servername = "localhost";
$username = "id1306901_g10";
$password = "Victor912";
$dbname = "id1306901_db_user";





// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
	$tbl_name="Topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];

	$sql="SELECT id, User, Topic, Detail, reg_date FROM $tbl_name WHERE id='$id'";
	$result=mysqli_query($con, $sql);

	$row=mysqli_fetch_array($result);
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $row['Topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $row['Detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By : <?php echo $row['User']; ?></strong> <strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $row['reg_date']; ?></td>
</tr>
</table></td>
</tr>
</table>