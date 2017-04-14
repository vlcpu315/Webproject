<?PHP
//login
session_start();
$name = $_POST['login'];
$password = $_POST['password'];
$con = mysqli_connect("localhost","id1306901_g10","Victor912","id1306901_db_user");
$qry = "SELECT * FROM User_ID WHERE User_Name='$name' AND PassWord='$password'";
$result=mysqli_query($con, $qry);
if(mysqli_num_rows($result) == 1) {
//Login Successful
$_SESSION['user'] = $name;
header("location: Forum.php");
} else {
//Login failed
$errmsg_arr[] = 'Login failed';
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
header("location: login_form.php");
exit();
};
mysqli_close($con);
?>