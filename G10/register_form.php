<?php
	session_start();
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
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>

<form id="registerForm" name="registerForm" method="post" action="register.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">

    <tr>
      <th width="124">Login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>

</div>

		<footer>
			<P class="copyright"><a href="Sitemap.html">Site Map</a></P>
			<br>
			<p class="copyright">Copyright &copy; 2017 Group 10 | Designed by <a href="AboutUs.html">Victor</a>, <a href="AboutUs.html">Samuel</a>, <a href="AboutUs.html">Grace</a>, <a href="AboutUs.html">Bob</a></p>
		</footer>
</div>
</body>