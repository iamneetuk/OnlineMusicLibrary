<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>

<body>
<?php
session_start();
$_SESSION['heading'] ="STREAM MOOD SONGS";
include("gaana.php");
?>

<div class="ov">
<table border="1">
<?php
include("connection.php");
$count = 0;
echo '<tr>';
$mood=array("Sad","Romantic","Fun","Rocking");
for($i=0; $i<sizeof($mood); $i++)
{
//echo '<input type="radio" name="mood" value='.$mood[$i].' />';
//echo $mood[$i].'</br>';
if($mood[$i]!=NULL)
 {
 $count = $count+1;
 echo '<td>';
echo '<a href="mood_song_play.php?mood='.$mood[$i].'"><img src="images/cover.png"><br>'.$mood[$i].'</a><br>';
 echo '</td>';
 if($count==7)
 {
 $count=0;
 echo '</tr>';
 }
 
 }

}
?>
</table>
</div>
</body>
</html>