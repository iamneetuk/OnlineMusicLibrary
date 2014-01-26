<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<div id="wrapper">

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="50000000000000000000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />

<?php
include("connection.php");
echo 'Select Mood'.'</br>';
$cars=array("Sad","Romantic","Fun","Rocking");
for($i=0; $i<sizeof($cars); $i++)
{

echo '<input type="checkbox" name="mood[]" value='.$cars[$i].' />';
echo $cars[$i].'</br>';
}
?>
</form>
</div>
</body>
</html>