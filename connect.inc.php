<?php
//include file for opening connections to the MySQL database

//open connection
function OpenCon() {
    //information: address, username, password, and database name
    $dbhost = "localhost";
    $dbuser = "queris";
    $dbpass = "1GiraffeOnMe";
    $db = "queris";

    //use mysqli built in function to open connection, throw error if it doesn't work
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);

    return $conn;
}

//close connection
function CloseCon($conn) {
    $conn -> close();
}

?>
