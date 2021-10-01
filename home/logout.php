<?php

setcookie("username", '', time() - (60*60*24*7),'/');
setcookie("password", '', time() - (60*60*24*7),'/');

echo"Successfully Logout";
echo"<br><br>";
echo'<a href="../login/index.php">Click Here To Login</a>';

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