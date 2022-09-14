<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Portfolio</title>
    <link rel="stylesheet" href="web-css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="page-content">
            <section class="container">
                <div class="lines">
                    <div>
                        <h4>Register Form</h4>
                        <p>Don't have an Account yet? Sign up Here!!</p>
                        <form class="form-1" action="includes/signup.inc.php" method="post">
                                <input type="text" name="uid" placeholder="Username"><br>
                                <input type="password" name="pwd" placeholder="Password"><br>
                                <input type="password" name="pwdRepeat" placeholder="Repeat Password"><br>
                                <input type="text" name="email" placeholder="Email">
                            <br>
                            <button type="submit" name="submit">Sign Up</button></form>
                    </div>

                    <div class="index-login-login">
                        <h4>Login Here</h4>
                        <form class="form-2" action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username"><br>
                            <input type="password" name="pwd" placeholder="Password"><br>
                            <button type="submit" name="submit">Log In</button></form>
                    </div>
                    </div>
            </section>
    </div>
</body>
</html>