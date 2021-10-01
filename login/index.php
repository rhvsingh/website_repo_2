<?php

    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        header('location:../home/index.php');
    }

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Login | TechRHV</title>

    <link rel="stylesheet" type="text/css" href="main.css" hreflang="en">

    <link href="https://fonts.googleapis.com/css?family=Asap|Khula|Montserrat|Muli|Nunito|Source+Sans+Pro|Abel|Hind+Madurai|Karla|Lato|Open+Sans|Oxygen|Questrial|Quicksand|Roboto|Spectral+SC|Titillium+Web" rel="stylesheet" hreflang="en">

</head>

<body>
    <div id="header">

        <div id="header_heading">
            Welcome To Login Page
        </div>

        <div id="header_form">

            <div id="header_form_heading">
                Login
            </div>

            <form action="dologin.php" method="post">
                <div class="header_form_input">

                    <input type="text" name="username" placeholder="Username" required>

                </div>

                <div class="header_form_input">

                    <input type="password" name="password" placeholder="Password" required>

                </div>

                <div class="header_form_input">

                    <input type="submit" name="submit" value="Login">

                </div>

            </form>

        </div>

    </div>
</body>

</html>
