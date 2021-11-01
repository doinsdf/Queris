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

    <?php
    include_once "../connect.inc.php";
    include_once "../header.php";
    $conn = OpenCon();

    if(!isset($_GET["language"])){
        header("LOCATION: http://localhost");
        exit();
    }


    $language = strtolower($_GET["language"]);
    $query = "SELECT * FROM `post_languages` WHERE `language` = '$language';";
    $result = mysqli_query($conn, $query);
    $postids = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $username = $_SESSION["uid"];
    $langsql = "SELECT * FROM `queris_users` WHERE `username` = '$username';";
    $langquery = mysqli_query($conn, $langsql);
    $users = mysqli_fetch_all($langquery, MYSQLI_ASSOC);
    $user = $users[0];
    $languages = json_decode($user["learning_languages"]);

    ?>
    <div class="languages" onload="setLanguages()" onscroll="updateLanguages()">
      <a href="http://localhost" class="toggle medium unfilled language">Followed By You</a>
      <?php foreach($languages as $language) :
        $urllanguage = str_replace("+", "plus", $language);
        $urllanguage = str_replace("#", "sharp", $urllanguage);
        ?>
        <a class="toggle medium unfilled language" id="<?php echo $urllanguage;?>" href="http://localhost/browse?language=<?php echo $urllanguage;?>&scroll=0"><?php echo ucwords(str_replace("-", " ", $language));?></a>
      <?php endforeach;?>
    </div>
    <?php print_r($posts);?>
    <?php foreach($postids as $postid) :
      $postid = $postid["ID"];
      $postsql = "SELECT * FROM `queris_posts` WHERE `ID` = '$postid';";
      $postquery = mysqli_query($conn, $postsql);
      $postresult = mysqli_fetch_all($postquery, MYSQLI_ASSOC);
      $post = $postresult[0];
      
      $url_title = $post["ID"];
      $url_title = preg_replace("/[^A-Za-z0-9 ]/", '', $post["title"]);
      $url_title = explode(" ", $url_title);
      $url_title = array_slice($url_title, 0, 5);
      $url_title = implode(' ', $url_title);
      $url_title = str_replace(" ", "_", $url_title);
      ?>
      <div class="post drop-shadow border center-large">
        <span class="upvote-container">
            <button onclick="upvote" class="upvote-button" data-postid="<?php echo $post["ID"];?>">
              <i class="fas fa-arrow-up"></i>
            </button>
            <div class="small"><?php echo $post["upvotes"];?></div>
          </form>
        </span>
        <a class="medium title" href="http://localhost/post?n=<?php echo $post["ID"];?>&t=<?php echo $url_title;?>"><?php echo $post["title"];?></a>
        <span class="small author"><?php echo $post["author"];?></span>
      </div>
    <?php endforeach; ?>
    <script src="../index.js"></script>
</body>
</html>