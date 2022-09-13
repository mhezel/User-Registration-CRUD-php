<?php

    if (isset($_POST["submit"]))
    {
        //grabbing the data from the user input

        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];
        $email = $_POST["email"];

        // Instantiate sign-up controller

        include "../classes/Dbh.class.php";
        include "../classes/Signup.class.php";
        include "../classes/SignupContr.class.php";

        $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

        // Running error handles and user sign-up

        $signup->signupUser();

        // Going back to index page

        header("location: ../index.php?error=none");
    }