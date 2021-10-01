<?php

$connection = mysqli_connect("fdb24.awardspace.net", "3037892_school", "techrhv004P@ss", "3037892_school");

if(!$connection){
    die("Connection Failed");
}

if(isset($_POST['submit'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query1 = "SELECT username,email FROM record";
    $result1 = mysqli_query($connection,$query1);
    
    $pass1 = 0;
    $pass2 = 0;
    
    while($row = mysqli_fetch_assoc($result1)){
        if($username==$row['username']){
            $pass1 = 1;
        }
        
        if($email==$row['email']){
            $pass2 = 1; 
        }
    }
    
    if($pass1==0 && $pass2==0){
        
        if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
            setcookie("username", '', time() - (60*60*24*7),'/');
            setcookie("password", '', time() - (60*60*24*7),'/');
        }
    
        $query = "INSERT INTO record (first_name, last_name, email, username, password)";
        $query .=" VALUES('$first_name','$last_name','$email','$username','$password')";
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("Query Failed". mysqli_error($connection));
        }
        
        setcookie("username",$username,time()+(60*60*24*7),'/');
        setcookie("password",$password,time()+(60*60*24*7),'/');

        header('location:../home/index.php');
    }
    
    if($pass1==1){
        echo'Username already exist<br>';
    }
    
    if($pass2==1){
        echo'Email Id already exist<br>';
    }
    
    if($pass1==1){
        echo '<br><a href="index.php">Click Here To SignUp Again</a>';
    }
    elseif($pass2==1){
        echo '<br><a href="index.php">Click Here To SignUp Again</a>';
    }
}

?>
