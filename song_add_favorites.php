<html>
<body>

<?php
session_start();
include("connection.php");

$checkBox = $_SESSION['add'];

$n = "nitu";
for($i=0; $i<sizeof($checkBox); $i++){
$query = 'INSERT INTO favorites_record (username,song_id)

VALUES
	("' . $_SESSION['username'] . '",
	' . $checkBox[$i] . ')';
		
mysql_query($query, $db) or die(mysql_error($db));
}	
		header("location:all_song_display.php");	
?>

</body>
</html>
