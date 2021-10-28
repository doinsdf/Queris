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
    <?php include "../header.php";
    if(!isset($_SESSION["uid"])) {
        header("LOCATION: http://localhost/signup");
    }?>
    <form method="post" action="makepost.php" autocomplete="off">
        <div class="center-large isolated">
            <div class="large">Ask a Question</div>
            <div class="drop-shadow border">
                <div id="post-type">
                    <span class="large">Post Type: </span>
                    <input type="radio" name="type" value="question" id="question" checked="checked">
                    <label class="radio filled medium" for="question">Question</label>
                    <input type="radio" name="type" value="error" id="error">
                    <label class="radio unfilled medium" for="error">Error</label>
                </div>
                <input class="medium" type="text" name="title" placeholder="Post Title: Your question, summed up in about 100 characters.">
                <textarea class="medium" name="body" placeholder="Post Body: Any elaborations or specifications that will help people better understand your problem and find a solution go here." rows="10"></textarea>
                <input class="medium" type="text" name="tags" placeholder="Post Tags: Any framework, library, or language you are using.">
                <div class="center-container">
                    <input type="submit" name="submit" value="POST" class="filled medium" id="postbutton">
                </div>
            </div>
        </div>
    </form>
    <script src="../index.js"></script>
</body>
</html>