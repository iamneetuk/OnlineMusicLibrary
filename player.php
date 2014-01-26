<?php 
	echo "<script type=\"text/javascript\">\n";
	echo "function formhandler(form) {\n";
	echo "var URL = document.form.songs.options[document.form.songs.selectedIndex].value;\n";
	echo "window.content.location.href=URL;\n";
	echo "}\n";
	echo "</script>\n";
        $path = dirname(__FILE__) ;
/*
	change path below to folder where this file(and your mp3s) are located
	eg. define("mp3path", "http://example.com/files/mp3/");
	OR SIMPLY
	define("mp3path", "/files/mp3/")
*/

	define("mp3path", "Upp/");


	echo "<form name=\"form\" action=\"\">\n";
	echo "<select name=\"songs\" onchange=\"formhandler(form);\">\n";
	echo "<option value=\"".mp3path."song.php\">Select A Song(or Stop). . .</option>\n";
        $dir_handle = @opendir($path) or die("Error opening $path");
        $trans = array("-" , "_");
        while ($file = readdir($dir_handle)) {
	        if(strrchr($file,".mp3") != ".mp3" ) { continue; }
        	 echo '<option value="'.mp3path.'song.php?song='.htmlspecialchars(urlencode($file)).'">'.substr(str_replace($trans," ",htmlspecialchars(substr($file,0,-4))),0,75).'</option>'."\n";
        }
        closedir($dir_handle);
	echo "</select>\n";
	echo "</form>\n";
	echo "<iframe src=\"".mp3path."void\" name=\"content\" frameborder =\"0\" width=\"0\" height=\"0\" scrolling=\"no\">Your Browser Is NOT Compatible With This MP3 Player, Sorry.</iframe>\n";
?>
