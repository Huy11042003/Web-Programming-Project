<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "cv_online";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed";
    exit();
}

if (empty($_POST['login_username']) || empty($_POST['login_password'])) {
    echo "Please enter username and password.";
    exit;
}

$username = $_POST['login_username'];
$password = md5($_POST['login_password']);

$sql = "SELECT * FROM user_login WHERE login_username = '$username' AND login_password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    $_SESSION['usernamereinput'] = $username;

    header("Location: login.php");
} else {
    $account = $result->fetch_assoc();
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION['user_id'] = $account['user_id'];

    if (isset($_SESSION['usernamereinput'])) { unset($_SESSION['usernamereinput']); }

    header('Location: main.php');
}

$conn->close();

?>