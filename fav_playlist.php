<html>
<body>

<?php

if($_GET["select"]=="playlist")
{
header("location:choose_playlist_add.php");
}

if($_GET["select"]=="favorites")
{
header("location:song_add_favorites.php");
}



?>

</body>
</html>
