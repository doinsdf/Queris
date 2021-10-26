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