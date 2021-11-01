<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "../connect.inc.php";

    $conn = OpenCon();

    if (empty($username) || empty($password)) {
        header("LOCATION: http://localhost/login/?error=empty");
        exit();
    }

    $selectsql = "SELECT * FROM `queris_users` WHERE `username` = '$username';";
    $selectstmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($selectstmt, $selectsql)) {
        header("LOCATION: http://localhost/login?error=slstmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($selectstmt, "s", $username);
    mysqli_stmt_execute($selectstmt);
    $selectresult = mysqli_stmt_get_result($selectstmt);
    $selectresult = mysqli_fetch_all($selectresult, MYSQLI_ASSOC);
    
    if (empty($selectresult)) {
        header("LOCATION: http://localhost/login/?error=noexist");
        exit();
    }

    $result = $selectresult[0];
    if (password_verify($password, $result["pwd_hashed"])) {
        session_start();
        $_SESSION["uid"] = $result["username"];
        header("LOCATION: http://localhost");
        exit();
    }
    else {
        header("LOCATION: http://localhost/login/?error=wrongpassword");
        exit();
    }
} else {

}?>