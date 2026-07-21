<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$image = $_FILES['photo']['name'];
$tmpName = $_FILES['photo']['tmp_name'];

$std = $_POST['std'];

if ($password != $cpassword) {

    echo '<script>
    alert("Password did not match");
    window.location="registration.php";
    </script>';
    exit();

} else {

    move_uploaded_file($tmpName, "../uploads/$image");

    $sql = "INSERT INTO userdata (username, mobile, password, photo, standard, status, votes)
            VALUES ('$username', '$mobile', '$password', '$image', '$std', 0, 0)";

    $result = mysqli_query($con, $sql);

$result = mysqli_query($con, $sql);

if ($result) {
    echo '<script>
        alert("Registration successful");
        window.location.href = "index.php";
    </script>';
    exit();
} else {
    die("Database Error: " . mysqli_error($con));
}
}
?>