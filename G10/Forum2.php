<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

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
			<?php
			if (isLoggedIn()){
				session_start();
                echo $_SESSION['User_ID'];
				echo '<a href="logout.php">Logout</a><br/>';
			} else {
				echo '<a href="login_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
			?>
            <table>
            <tr>
            <td class="forumtd1"><strong>#</strong></td>
            <td class="forumtd2"><strong>Topic</strong></td>
            <td class="forumtd2"><strong>Date/Time</strong></td>
            </tr>
			<tr>
            <td>1</td>
            <td><a href="#">Coming Soon!</a><BR></td>
            <td>16/02/17 03:31:04</td>
            </tr>
			<tr>
            <td>2</td>
            <td><a href="#">Coming Soon!</a><BR></td>
            <td>16/02/17 03:31:04</td>
            </tr>
			<tr>
            <td>3</td>
            <td><a href="#">Coming Soon!</a><BR></td>
            <td>16/02/17 03:31:04</td>
            </tr>
			<tr>
            <td>4</td>
            <td><a href="#">Coming Soon!</a><BR></td>
            <td>16/02/17 03:31:04</td>
            </tr>
			<tr>
            <td>5</td>
            <td><a href="#">Coming Soon!</a><BR></td>
            <td>16/02/17 03:31:04</td>
            </tr>
			<tr>
			<td colspan="3" class="forumtd4"><a href="#"><strong>Create New Topic</strong> </a></td>
			</td>
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