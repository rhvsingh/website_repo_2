<?php

    $connection = mysqli_connect("fdb24.awardspace.net", "3037892_school", "techrhv004P@ss", "3037892_school");

    if(!$connection){
        die("Connection Failed");
    }

    if(empty($_COOKIE['username']) && empty($_COOKIE['password'])){
        header('location:../login/index.php');
    }

    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    $query="SELECT * FROM record";
    $result= mysqli_query($connection,$query);

    while($row= mysqli_fetch_assoc($result)){
        if($username==$row['username'] && $password==$row['password']){

?>

<?php

    $first_name=$row['first_name'];
    $last_name=$row['last_name'];

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?php echo $first_name.' '.$last_name; ?> | TechRHV</title>

    <link rel="stylesheet" type="text/css" href="main.css" hreflang="en">

    <link href="https://fonts.googleapis.com/css?family=Asap|Khula|Montserrat|Muli|Nunito|Source+Sans+Pro|Abel|Hind+Madurai|Karla|Lato|Open+Sans|Oxygen|Questrial|Quicksand|Roboto|Spectral+SC|Titillium+Web" rel="stylesheet" hreflang="en">

</head>

<body>
    <center>
        <h2>Welcome In TechRHV Website</h2>
    </center>
    <br>

    <?php
            date_default_timezone_set("Asia/Kolkata");

            $date= date("H");

            if($date >=5  && $date <12){
                echo'Good Morning, '.$first_name.' '.$last_name;
            }
            elseif($date >=12 && $date<18){
                echo'Good Afternoon, '.$first_name.' '.$last_name;
            }
            elseif($date >=18 && $date <24){
                echo'Good Night, '.$first_name.' '.$last_name;
            }
            elseif($date >=00 && $date <5){
                echo $first_name.' '.$last_name.', Its Mid Night';
            }

        ?>

    <div id="logout">
        <a href="logout.php">Logout</a>
    </div>

    <div id="change_pass">

        <form action="change_pass.php" method="post">

            <fieldset>

                <legend>

                    <div id="change_pass_heading">
                        Want to Change Password
                    </div>

                </legend>

                <div class="change_pass_input">

                    <label for="pass_main">Current Password : </label>
                    <input type="password" name="pass_main" required>

                </div>

                <div class="change_pass_input">

                    <label for="pass_new">New Password : </label>
                    <input type="password" name="pass_new" required>

                </div>

                <div class="change_pass_input">

                    <label for="pass_confirm">Confirm Password : </label>
                    <input type="password" name="pass_confirm" required>

                </div>

                <div class="change_pass_input">

                    <input type="submit" name="submit_pass" value="Change">

                </div>

            </fieldset>

        </form>
        <div id=logo>
   <a href="https://hacktoberfest.com/" target="_blank"><img src="http://danschenker.com/wp-content/uploads/2022/10/Hfest-Logo-2-Color-Void@2x.png" border="0" height="100px" alt="Hacktoberfest logo"></a>
       </div>
    </div>

</body>

</html>

<?php

    }
}

?>
