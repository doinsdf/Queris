<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    include_once "connect.inc.php";
    include_once "header.php";
    $conn = OpenCon();
    $query = "SELECT * FROM `queris_posts`";
    $result = mysqli_query($conn, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <?php foreach($posts as $post) :
      $url_title = $post["ID"];
      $url_title = preg_replace("/[^A-Za-z0-9 ]/", '', $post["title"]);
      $url_title = explode(" ", $url_title);
      $url_title = array_slice($url_title, 0, 5);
      $url_title = implode(' ', $url_title);
      $url_title = str_replace(" ", "_", $url_title);
      ?>
      <div class="post drop-shadow border center-large">
        <span class="upvote-container">
            <button onclick="upvote" class="upvote-button" data-postid="<?php echo $post["UID"];?>">
              <i class="fas fa-arrow-up"></i>
            </button>
            <div class="small"><?php echo $post["upvotes"];?></div>
          </form>
        </span>
        <a class="medium title" href="http://localhost/post?n=<?php echo $post["ID"];?>&t=<?php echo $url_title;?>"><?php echo $post["title"];?></a>
        <span class="small author"><?php echo $post["author"];?></span>
      </div>
    <?php endforeach; ?>
      <script src="index.js"></script>
</body>
</html>