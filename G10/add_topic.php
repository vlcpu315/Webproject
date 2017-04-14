<?php
session_start();
$topic = $_POST['topic'];
$user = $_SESSION['user'];
$detail = $_POST['detail'];
$con = mysqli_connect("localhost","id1306901_g10","Victor912","id1306901_db_user");
$sql = "INSERT INTO Topic (Topic, User, detail)
VALUES ('$topic', '$user', '$detail')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("location: Forum.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($con);
?>