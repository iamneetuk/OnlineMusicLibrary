<html>
<body>

<?php
session_start();
include("connection.php");

$checkBox = $_SESSION['add'];
$playlist = $_GET["playl"];
//$u = $_SESSION['username'];
for($i=0; $i<sizeof($checkBox); $i++){
$query = 'INSERT INTO playlist_record (username,playlist,song_id)

VALUES
	("' . $_SESSION['username'] . '",
	"' .$playlist. '",
	' . $checkBox[$i] . ')';
		
mysql_query($query, $db) or die(mysql_error($db));
}	
	header("location:show_playlist.php");
	
?>

</body>
</html>
