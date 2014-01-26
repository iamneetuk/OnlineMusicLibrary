<html>
<head>

<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>
<body>
<div id="wrapper">
<div class="log">

<form action="user_db_insrt.php" method="post">
			
			<h3>Register:</h3>
				
				Username : <input type="text" name="fname" /><tr>
				Password : <input type="password" name="Pass" />
				<input type="submit" value="Register!" />
			         <p>
				<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
				<label for='message'>Enter the code above here :</label><br>
				<input id="6_letters_code" name="6_letters_code" type="text"><br>
				<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
				</p>
			
		
		</form>
		<h3>Login Page</h3>
		<form action="login.php" method="post">
		<input type="submit" value="Login" />
		<br>
		</form>
		<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

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