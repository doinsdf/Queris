<?php session_start(); ?>
<header class="drop-shadow">
    <span class="logo large">Queris</span>
    <?php if(isset($_SESSION["uid"])){?>
    <span class="nav">
        <a href="http://localhost" class="medium nav-link">Home</a>
        <a href="http://localhost/user?myprofile/" class="medium nav-link">Profile</a>
        <a href="http://localhost/logout/" class="medium nav-link">Log Out</a>
    </span>
    <?php } else {?>
    <span class="nav">
        <a href="http://localhost" class="medium nav-link">Home</a>
        <a href="http://localhost/signup" class="medium nav-link">Sign Up</a>
        <a href="http://localhost/login" class="medium nav-link">Log In</a>
    </span>
    <?php } ?>
</header>
<a href="http://localhost/makeapost" class="question-button border drop-shadow">?</a>
<script src="https://kit.fontawesome.com/bae64626a1.js" crossorigin="anonymous"></script>
