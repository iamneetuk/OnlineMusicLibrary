<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<div id="wrapper">
<div class="log">
<?php
session_start();
if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
	unset($_SESSION['backk']);
	unset($_SESSION['log']);
	unset($_SESSION['exist']);
}
echo "<center><br><br><br><br><br><br><br><br><br><br><br>Logout successful<br><br>";
echo "<a href='login.php'><h2>Login again</h2></a></center>";
?>
</div>
</div>
</body>
</html>