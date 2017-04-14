<?php
$servername = "localhost";
$username = "id1306901_g10";
$password = "Victor912";
$dbname = "id1306901_db_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['login'];
$passwd = $_POST['password'];
$sql = "INSERT INTO User_ID (User_Name, PassWord)
VALUES ('$username', '$passwd')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<script>
    setTimeout(function(){window.location.href='login_form.php';},1000);
</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>
    setTimeout(function(){window.location.href='register_form.php';},1000);
</script>";
}

mysqli_close($conn);
?>