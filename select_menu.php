<?php
if($_GET["option"] == "album")
{
$_SESSION['album'] = 1;
$_SESSION['all_song'] = 0;
$_SESSION['artist'] = 0;
echo 'gg';
//header("location:profile.php");
}

else if($_GET["option"] == "all_song")
{
$_SESSION['album'] = 1;
$_SESSION['all_song'] = 0;
$_SESSION['artist'] = 0;
}

else if($_GET["option"] == "artist")
{
$_SESSION['album'] = 1;
$_SESSION['all_song'] = 0;
$_SESSION['artist'] = 0;
}
?>