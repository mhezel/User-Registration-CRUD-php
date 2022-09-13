<?php

if (isset($_POST["submit"])) {
    //grabbing the data from the user input

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate sign-up controller

    include "../classes/Dbh.class.php";
    include "../classes/Login.class.php";
    include "../classes/LoginContr.class.php";

    $login = new LoginContr($uid, $pwd);

    // Running error handles and user sign-up

    $login->loginUser();

    // Going back to index page
    header("location: ../homepage.php?error=none");
}