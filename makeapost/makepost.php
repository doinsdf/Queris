<?php
require_once "../connect.inc.php";
session_start();
$conn = OpenCon();
if(isset($_SESSION["uid"])){
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $body = $_POST["body"];
        $type = $_POST["type"];
        $author = $_SESSION["uid"];
        $upvotes = 0;
        $tags = explode(" ", $_POST["tags"]);

        $sql = "INSERT INTO `queris_posts`(`title`, `body`, `author`, `upvotes`, `type`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("LOCATION: makepost.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "sssis", $title, $body, $author, $upvotes, $type);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);


        $lastinsertsql = "SELECT * FROM `queris_posts` WHERE `ID` = (SELECT MAX(`ID`) FROM `queris_posts`)";
        $lastinsertquery = mysqli_query($conn, $lastinsertsql);
        $lastinsert = mysqli_fetch_all($lastinsertquery, MYSQLI_ASSOC)[0];
        $postid = $lastinsert["ID"];

        foreach($tags as $tag):
            $tag = strtolower($tag);
            $tagsql = "INSERT INTO `post_languages`(`ID`, `language`) VALUES (?, ?);";
            $tagstmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($tagstmt, $tagsql)) {
                header("LOCATION: makepost.php?error=ouvb");
                exit();
            }
            mysqli_stmt_bind_param($tagstmt, "is", $postid, $tag);
            mysqli_stmt_execute($tagstmt);
            mysqli_stmt_get_result($tagstmt);
            mysqli_stmt_close($tagstmt);
        endforeach;
        header("LOCATION: http://localhost/post?n=" . $postid);
        exit();
    }
}

?>