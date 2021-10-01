<?php

$connection = mysqli_connect("fdb24.awardspace.net", "3037892_school", "techrhv004P@ss", "3037892_school");

if(!$connection){
    die("Connection Failed");
}

if(isset($_POST['submit_pass'])){
    
    $username = $_COOKIE['username'];
    
    $pass_main = $_POST['pass_main'];
    $pass_new = $_POST['pass_new'];
    $pass_confirm = $_POST['pass_confirm'];
    
    $query = "SELECT password FROM record where username = '$username'";
    
    $result = mysqli_query($connection,$query);
    
    $row = mysqli_fetch_assoc($result);
    
    if($row['password'] === $pass_main ) {
        
        if($pass_new === $pass_confirm) {
            
            $query1 = "UPDATE record SET password='$pass_new' WHERE username = '$username'";
            
            $result1 = mysqli_query($connection,$query1);
            
            if(!$result1){
                die("Query Failed <br>". mysqli_error($connection));
            }
            else{
                setcookie("password", $pass_new,time()+(60*60*24*7), '/');
                setcookie("username",$username,time()+(60*60*24*7),'/');
                echo "Password Changed Successfully";
                echo '<br><h3><a href="index.php">Back To Home Page</a></h3>';
            }
            
        }
        else {
            echo "<center><h2>Password Miss Match</h2></center>";
            echo '<br><h3><a href="index.php">Back To Home Page</a></h3>';
        }
        
    }
    else {
        echo"<center><h2>Enter Wrong Password</h2></center>";
        echo '<br><h3><a href="index.php">Back To Home Page</a></h3>';
    }
    
}

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>TechRHV</title>
</head>

<body>

</body>

</html>
