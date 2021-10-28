<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include_once "../header.php";?>
    <div class="isolated center-small">
        <form autocomplete="off" method="post" action="login.inc.php">
            <div class="large">Log In</div>
            <div class="border drop-shadow">
                <div class="user-error small">
                    <?php
                    if(isset($_GET["error"])){
                        $error = $_GET["error"];
                        if ($error === "empty"){
                            echo "Please fill out both fields.";
                        } else if($error === "stmtfailed"){
                            echo "Something went wrong. Please try again.";
                        } else if($error === "noexist"){
                            echo "That username doesn't exist. Please try again.";
                        } else if($error === "wrongpassword"){
                            echo "That wasn't the right password. Try again.";
                        }
                    }
                    ?>
                </div>
                <div class="user-success small">
                    <?php if(isset($_GET["success"])){
                        echo "You're all signed up. Now, just log in to continue to Queris.";
                    }?>
                </div>
                <input class="medium" type="text" name="username" placeholder="Username">
                <input class="medium" type="password" name="password" placeholder="Password">
                <div class="center-container">
                    <button class="filled" type="submit" name="submit">Log In</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>