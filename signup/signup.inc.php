<?php
if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $pwdrepeat = $_POST["passwordrepeat"];



    if (empty($username) || empty($pwd) || empty($pwdrepeat)) {
        header("LOCATION: http://localhost/signup/?error=empty");
        exit();
    }

    if (!preg_match('/[A-Za-z\d\s]/g', $username)){
        header("LOCATION: http://localhost/signup/?error=wrongchars");
    }
    if($pwd !== $pwdrepeat) {
        header("LOCATION: http://localhost/signup/?error=nomatch");
        exit();
    } else {
        require_once "../connect.inc.php";

        $conn = OpenCon();

        $sql = "SELECT * FROM queris_users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("LOCATION: http://localhost/signup?error=stmtfailed");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($resultData)) {
            header("LOCATION: http://localhost/signup?error=nametaken");
        }
        else {
            $languages = array();
            foreach ($_POST as $key => $value) {
                if ($value === "on") {
                    array_push($languages, $key);
                }
            }
            $languages = json_encode($languages);

            $pwd_hashed = password_hash($pwd, PASSWORD_DEFAULT);

            $bio = "";
            $createsql = "INSERT INTO `queris_users`(`username`, `pwd_hashed`, `bio`, `learning_languages`) VALUES (?,?,?,?)";
            $createstmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($createstmt, $createsql)) {
                header("LOCATION: http://localhost/signup?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($createstmt, "ssss", $username, $pwd_hashed, $bio, $languages);
            mysqli_stmt_execute($createstmt);

            header("LOCATION: http://localhost/login/?success");

        }

    }
    
}?>