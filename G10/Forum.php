<!DOCTYPE html>
<html lang="en">
	<head>
		<title>WonderCNF</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/forum.css">
</head>
	<body>
	<div id="container">
		<header>
			<div class="banner">
				<img src="image/Chihuo.Jpg" alt="Logo">WonderCNF
			</div>
			<!-- navigation -->
<div class="navbar">
				 <ul>
					<li><a href="index.html" class="border_first">Home</a></li>
					<li>
						<a href="Fiveflavors.html">Five Flavors</a>
							 <ul>
								<li><a href="Sour.html">Sour</a></li>
								<li><a href="Sweet.html">Sweet</a></li>
								<li><a href="bitter.html">Bitter</a></li>
								<li><a href="spicy.html">Spicy</a></li>
								<li><a href="salty.html">Salty</a></li>
							</ul>
					</li>
					<li><a href="Forum.php">Forum</a></li>
					<li><a href="AboutUs.html">About Us</a></li>
					<li><a href="Contact.html">Contact Us</a></li>
				</ul>
			</div>
		</header>

<div id="forumTable">
			<div id = "login">
<?php
session_start();
if (isset($_SESSION['user'])){
echo $_SESSION['user']."<br>";
echo '<a href="logout.php">Logout</a><br/>';
echo '>><a href="add_topic_form.php">Create new topic</a>';
} else {
echo '<a href="login_form.php">Login</a><br/>';
echo '<a href="register_form.php">New user?</a>';
}
?>
			</div>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
<td width="7%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
</tr>

<?php
$con = mysqli_connect("localhost","id1306901_g10","Victor912","id1306901_db_user");
$sql = "SELECT reg_date, id, User, Topic FROM Topic";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $row['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $row['id']; ?>"><?php echo $row['Topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $row['reg_date'];?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $row['User'];?></td>
</tr>

<?php
// Exit looping and close connection

    }
} else {
    echo "0 results";
}
mysqli_close($con);
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><?php
if (isset($_SESSION['user'])){
echo '>><a href="add_topic_form.php">Create new topic</a>';
} else {
echo '<a href="login_form.php">Login</a><br/>';
echo '<a href="register_form.php">New user?</a>';
}
?></td>
</tr>
</table>
</div>



<footer>
			<P class="copyright"><a href="Sitemap.html">Site Map</a></P>
			<br>
			<p class="copyright">Copyright &copy; 2017 Group 10 | Designed by <a href="AboutUs.html">Victor</a>, <a href="AboutUs.html">Samuel</a>, <a href="AboutUs.html">Grace</a>, <a href="AboutUs.html">Bob</a></p>
		</footer>
</div>
</body>