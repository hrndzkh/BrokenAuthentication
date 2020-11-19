<!DOCTYPE html>   
<html>   
	<head>
		<title> Login Page </title>
	</head>    
	<body>    
   		 <form action="index.php" method="GET">  
            <label>Email Address: </label><br>   
            <input type="text" placeholder="Enter Your Email Address" name="email" required><br><br>
            <label>Password: </label><br>
            <input type="password" placeholder="Enter Your Password" name="password" required><br><br>  
            <button type="submit">Login</button><br><br>
    	</form> 

        <?php

            include "db.php";

            echo "Your email address: " . $_GET["email"] . "<br>";
            echo "Your password: " . $_GET["password"] . "<br>";

            $email = $_GET["email"];
            $password = $_GET["password"];

            $myConn = new DB;

            $query = "SELECT * FROM user WHERE email = '$email'";

            $result = $myConn->executeSQL($query);

            if (!empty($result)) { 
                echo "<br> Login as $email <br>";
            } else {
                echo "<br> Invalid login! <br>";
            }

        ?>    
	</body>     
</html>    