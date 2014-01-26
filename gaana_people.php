<html>
<head>
<link rel="stylesheet" type="text/css" href="gaanac.css" />
</head>
<body>
<div id="wrapper">
<div class="heading">
<?php	
if(!isset($_SESSION['heading']))
$_SESSION['heading'] = "";
echo $_SESSION['heading']; ?>

	</div>
	<?php include("navigation_bar.php");?>
	<div class="box2">
	
<form name="input" action="people_profile.php" method="get">
<input type="text" name="track" />
<input type="submit" value="Search User Paylist" />
</form>
	</div>
	
	<div class="search">
<?php	
echo 'Welcome '.$_SESSION['username'];
include("item_search.php"); ?>
	</div>
	
	<div class="browse">
<?php include("alphabet_album.php"); ?><br>
	<?php include("alphabet_artist.php"); ?><br>
	<?php include("alphabet_song.php"); ?>
	</div>

		<div class="name">
<a href="all_song_display.php"><img src="images/name.png"></a>
</div>
	
	
	
	<div class="box3">
<img src="images/google.png" width="100" height="100">

	</div>
<div class="login">
<a href="login.php">Login</a> | <a href="logout.php">Logout</a>
</div>

<div class="upload">
<a href="mp3_upload.php">Upload Song</a>
</div>

	<div class="mp3">

		<?php include("play_song.php"); ?>
		</div>
	<div class="box4">
			
		<?php
		if(isset($_SESSION['marq']))
		echo '<FONT SIZE="4" FACE="courier" COLOR=white><MARQUEE BEHAVIOR=SCROLL SCROLLAMOUNT=05 BGColor=black >You are listning: '.$_SESSION['marq'].'</MARQUEE></FONT>';
		?>
		</div>

</div>
</body>
</html>