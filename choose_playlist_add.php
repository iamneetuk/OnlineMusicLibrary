<html>
<head>

<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
include("gaana.php");
?>
<div class="ov">
<?php
session_start();
$u = $_SESSION['username'];
include("connection.php");

$query = "SELECT DISTINCT playlist FROM playlist_record WHERE username = '$u'";
$result = mysql_query($query) or die(mysql_error());

echo '<form name="input" action="song_add_playlist.php" method="get">';
echo '<input type="submit" value="Submit" /><br>';
while($row = mysql_fetch_array($result))
{
$playlist = $row['playlist'];
if($playlist!=NULL)
{
echo '<input type="radio" name="playl" value='.$playlist.' />';
echo $row['playlist'].'<br>';   
}
}
echo '</form>';
?>
</div>
</body>
</html>