<?php
require_once "../connect.inc.php";
$conn = OpenCon();

if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $body = $_POST["body"];
    $author = "PlaceHolder";
    $upvotes = 0;
    $tags = explode(" ", $_POST["tags"]);
    $tags = json_encode($tags);

    //todo: check if another post has the exact same title. if so, don't allow

    //todo: type should actually work
    $type = "Question";



    $sql = "INSERT INTO `queris_posts`(`title`, `body`, `author`, `upvotes`, `tags`, `type`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("LOCATION: makepost.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssiss", $title, $body, $author, $upvotes, $tags, $type);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    header("LOCATION: index.php");
}
?>