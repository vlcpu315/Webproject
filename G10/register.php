<?php
session_start();
$con = mysql_connect("localhost","id1306901_g10","Victor912");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("id1306901_db_user", $con);
mysql_query("INSERT INTO User_ID (User_ID, PassWord) 
VALUES ('Peter', 'P@ssw0rd')");
mysql_close($con);
?>