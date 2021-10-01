<?php

    $connection = mysqli_connect("fdb24.awardspace.net", "3037892_school", "techrhv004P@ss", "3037892_school");

    if(!$connection){
        die("Connection Failed");
    }

    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "SELECT username,password FROM record";
        
        $result = mysqli_query($connection,$query);
        
        $pass=0;
        
        while($row = mysqli_fetch_assoc($result)){
            
            if($row['username']==$username){
           
                $pass=1;
           
                if( ($row['username']==$username) && ($row['password']===$password) ){
                    
               
                    setcookie("username",$username,time()+(60*60*24*7),'/');
                    setcookie("password",$password,time()+(60*60*24*7),'/');
               
                    header('location:../home/index.php');
                    
                    echo "<h2>Successfully Logined</h2>";
                }
           
                else {
                    echo "<h2>Wrong Username Or Password</h2>";
                    echo '<br><h3><a href="index.php">Click Here To Login Again</a></h3>';
                }
            }
        }
        
        if($pass==0){
            echo"<center><h2>Username Does Not Exist</h2></center>";
            echo'<br><center><h3><a href="../register/index.php">SignUp</a></h3></center>';
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
