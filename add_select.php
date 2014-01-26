<html>
<head>

<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="Select Playlist/Favorites";
include("gaana.php");
?>
<div class="ov">
<?php

if(isset($_GET["add"]))
{
$_SESSION['add']=$_GET["add"];
echo '<form name="input" action="fav_playlist.php" method="get">';
echo '<input type="radio" name="select" value="playlist" />Playlist';
echo '<input type="radio" name="select" value="favorites" />Favorites';
echo '<input type="submit" value="Submit" />';
echo '</form>';
}
else
{

}
?>
</div>
</body>
</html>
