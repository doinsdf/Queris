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
    <?php include_once "../header.php";
    $id = $_GET["n"];

    require_once "../connect.inc.php";
    $conn = OpenCon();

    $sql = "SELECT * FROM `queris_posts` WHERE `ID` = $id;";
    $query = mysqli_query($conn, $sql);
    $post = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $post = $post[0];


    ?>
    <div class="post drop-shadow border center-large">
        <span class="upvote-container">
            <button onclick="upvote" class="upvote-button" data-postid="<?php echo $post["UID"];?>">
              <i class="fas fa-arrow-up"></i>
            </button>
            <div class="small"><?php echo $post["upvotes"];?></div>
          </form>
        </span>
        <div class="contents"> 
            <div class="large"><?php echo $post["title"];?></div>
            <div class="medium"><?php echo $post["body"];?></div>
        </div>
        <span class="small author"><?php echo $post["author"];?></span>
    </div>
</body>
</html>