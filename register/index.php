<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>SignUp | TechRHV</title>

    <link rel="stylesheet" type="text/css" href="main.css" hreflang="en">

    <link href="https://fonts.googleapis.com/css?family=Asap|Khula|Montserrat|Muli|Nunito|Source+Sans+Pro|Abel|Hind+Madurai|Karla|Lato|Open+Sans|Oxygen|Questrial|Quicksand|Roboto|Spectral+SC|Titillium+Web" rel="stylesheet" hreflang="en">

</head>

<body>

    <div id="header">

        <div id="header_heading">
            Welcome To SignUp Page
        </div>

        <div id="header_form">

            <div id="header_form_heading">
                SignUp
            </div>

            <form action="reg.php" method="post">

                <div class="header_form_input"><input type="text" name="first_name" placeholder="First Name" required></div>

                <div class="header_form_input"><input type="text" name="last_name" placeholder="Last Name" required></div>

                <div class="header_form_input"><input type="email" name="email" placeholder="Email" required></div>

                <div class="header_form_input"><input type="text" name="username" placeholder="Username" required></div>

                <div class="header_form_input"><input type="password" name="password" placeholder="Password" required></div>

                <div class="header_form_input"><input type="submit" name="submit" value="SignUp"></div>

            </form>

        </div>

    </div>

</body>

</html>
