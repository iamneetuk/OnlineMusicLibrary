<html>
<head>

<link rel="stylesheet" type="text/css" href="mains.css" />
<script type="text/javascript" src="jquery.js">

</script>

</head>
<body>

<div id='wrapper'>

<div class='search'>
<form name="input" action="show_user_playlist.php" method="get">
<input type="text" name="user" />
<input type="submit" value="Search User Paylist" />
</form>
</div>
<?php

include("sorted_album.php");

?>


<div class='link'>

<a href = "profile_all_song.php"><img src = "images/home.png"></a><br>

<!------------------------------------------------------------------------------------------------------------>
<div id="pop-up">
	<div id="close"><a href="#"><img src="close.png" /></a></div>
	<div id="inside-of-pop-up">  <?php include("show_playlist.php");  ?>
	
	</div>
</div>

<div id="container">
	
	<div id="click">
		

<a href = "#"><img src = "images/playlist.png"></a>

	</div>
</div>

<script type="text/javascript" src="script.js"></script>


<!------------------------------------------------------------------------------------------------------------>
<a href = "profile_album.php"><img src = "images/album.png"></a><br>

<a href = "profile_artist.php"><img src = "images/artist.png"></a><br>
</div>
</div>
</body>
</html>