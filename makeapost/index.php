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
    <?php include "../header.php"?>
    <form method="post" action="makepost.php">
        <div class="center-large isolated">
            <div class="large">Ask a Question</div>
            <div class="drop-shadow border">
                <div id="post-type">
                    <span class="large">Post Type: </span>
                    <input type="checkbox" name="Error">
                    <label class="toggle medium" for="Error">Error</label>
                    <input type="checkbox" name="Question">
                    <label class="toggle medium" for="Question">Question</label>
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
</body>
</html>