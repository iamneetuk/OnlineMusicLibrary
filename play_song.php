<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>
<body>

<?php

if(isset($_GET["track"]))
{
$track = $_GET["track"];

include("connection.php");

$query = "SELECT song_name FROM song_record WHERE song_url='$track'";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
$_SESSION['marq'] = $row['song_name'];  
}

include("song_clicks.php");
echo '<object type="application/x-shockwave-flash" data="dewplayer-bubble.swf" width="1200" height="120" id="dewplayer-bubble" name="dewplayer-bubble">';
echo '<param name="movie" value="dewplayer-bubble.swf" />';
echo '<param name="flashvars" value="mp3='.$track.'&autostart=1&autoreplay=0&nopointer=1& showtime = 1&randomplay=1" />';
echo '<param name="wmode" value="transparent" />';
echo '</object>';

/*
echo '<div>';
echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="30" height="30">';
echo '<PARAM NAME=movie VALUE="http://www.strangecube.com/audioplay/online/audioplay.swf?file='.$track.'&auto=yes&sendstop=no&repeat=1&buttondir=http://www.strangecube.com/audioplay/online/alpha_buttons/classic&bgcolor=0x000000&mode=playpause">';
echo '<PARAM NAME=quality VALUE=high>';
echo '<PARAM NAME=wmode VALUE=transparent>';
echo '<embed src="http://www.strangecube.com/audioplay/online/audioplay.swf?file='.$track.'&auto=yes&sendstop=no&repeat=1&buttondir=http://www.strangecube.com/audioplay/online/alpha_buttons/classic&bgcolor=0x000000&mode=playpause" quality=high wmode=transparent width="30" height="30" align="" TYPE="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
echo '</embed></object></div>';
*/
}

else
{
/*
echo '<div>';
echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="30" height="30">';
echo '<PARAM NAME=movie VALUE="http://www.strangecube.com/audioplay/online/audioplay.swf?file=&auto=yes&sendstop=yes&repeat=0&buttondir=http://www.strangecube.com/audioplay/online/alpha_buttons/classic&bgcolor=0x000000&mode=playpause">';
echo '<PARAM NAME=quality VALUE=high>';
echo '<PARAM NAME=wmode VALUE=transparent>';
echo '<embed src="http://www.strangecube.com/audioplay/online/audioplay.swf?file=&auto=yes&sendstop=yes&repeat=0&buttondir=http://www.strangecube.com/audioplay/online/alpha_buttons/classic&bgcolor=0x000000&mode=playpause" quality=high wmode=transparent width="30" height="30" align="" TYPE="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
echo '</embed></object></div>';
*/


echo '<object type="application/x-shockwave-flash" data="dewplayer-bubble.swf" width="1200" height="120" id="dewplayer-bubble" name="dewplayer-bubble">';
echo '<param name="movie" value="dewplayer-bubble.swf" />';
echo '<param name="flashvars" value="mp3=" />';
echo '<param name="wmode" value="transparent" />';
echo '</object>';

}


?>

</body>
</html>
