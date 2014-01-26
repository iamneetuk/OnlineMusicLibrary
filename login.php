<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<div id="wrapper">
<div class="log">
<form action="logsc.php" method="post">
			
				<h3>Login:</h3>
				
				Username:<input type="text" name="user" class="design3"/><br>
				Password:<input type="password" name="pass" class="design3"/>
				<input type="submit" value="Login!" />
			
		</form>
		
		<h3>Do you want to create a new account</h3>
		
		<form action="register.php" method="post">
		
		<input type="submit" value="Register" />
		
		</form>
		
		</div>
		</div>
		</body>
		</html>
		
		<?php
session_start();
$_SESSION['exist']="";
if(isset($_SESSION['log']))
echo $_SESSION['log'];
?>