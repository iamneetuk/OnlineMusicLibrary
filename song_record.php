<?php

 session_start();
 include("connection.php");
 //Reads ID3v1 from a MP3 file and displays it
 $song = $_SESSION['song_name'];
 
     //$mp3 = "Upp/rockstar02(www.songs.pk).mp3"; //MP3 file to be read
 
 $mp3 = "upload/".$song; //MP3 file to be read
 //echo "Url : upload/".$song."<br>";
 $_SESSION['song_url'] = "upload/".$song;
 

 
                 //make a array of genres
     $genre_arr = array("Blues","Classic Rock","Country","Dance","Disco","Funk","Grunge",
 "Hip-Hop","Jazz","Metal","New Age","Oldies","Other","Pop","R&B",
 "Rap","Reggae","Rock","Techno","Industrial","Alternative","Ska",
 "Death Metal","Pranks","Soundtrack","Euro-Techno","Ambient",
 "Trip-Hop","Vocal","Jazz+Funk","Fusion","Trance","Classical",
 "Instrumental","Acid","House","Game","Sound Clip","Gospel",
 "Noise","AlternRock","Bass","Soul","Punk","Space","Meditative",
 "Instrumental Pop","Instrumental Rock","Ethnic","Gothic",
 "Darkwave","Techno-Industrial","Electronic","Pop-Folk",
 "Eurodance","Dream","Southern Rock","Comedy","Cult","Gangsta",
 "Top 40","Christian Rap","Pop/Funk","Jungle","Native American",
 "Cabaret","New Wave","Psychadelic","Rave","Showtunes","Trailer",
 "Lo-Fi","Tribal","Acid Punk","Acid Jazz","Polka","Retro",
 "Musical","Rock & Roll","Hard Rock","Folk","Folk-Rock",
 "National Folk","Swing","Fast Fusion","Bebob","Latin","Revival",
 "Celtic","Bluegrass","Avantgarde","Gothic Rock","Progressive Rock",
 "Psychedelic Rock","Symphonic Rock","Slow Rock","Big Band",
 "Chorus","Easy Listening","Acoustic","Humour","Speech","Chanson",
 "Opera","Chamber Music","Sonata","Symphony","Booty Bass","Primus",
 "Porn Groove","Satire","Slow Jam","Club","Tango","Samba",
 "Folklore","Ballad","Power Ballad","Rhythmic Soul","Freestyle",
 "Duet","Punk Rock","Drum Solo","Acapella","Euro-House","Dance Hall");
     
     $filesize = filesize($mp3);
     $file = fopen("upload/".$song, "r");
     fseek($file, -128, SEEK_END);
     
     $tag = fread($file, 3);
     
     
     if($tag == "TAG")
     {
         $data["song"] = trim(fread($file, 30));
         $data["artist"] = trim(fread($file, 30));
         $data["album"] = trim(fread($file, 30));
         $data["year"] = trim(fread($file, 4));
         $data["comment"] = trim(fread($file, 30));
         $data["genre"] = $genre_arr[ord(trim(fread($file, 1)))];
         $_SESSION['song_n'] = $data["song"];
		 $_SESSION['song_artist'] = $data["artist"];
		 $_SESSION['song_album'] = $data["album"];
		 $_SESSION['song_genre'] = $data["genre"];
	 
	 }
     else
         die("MP3 file does not have any ID3 tag!");
     
     fclose($file);
     
     while(list($key, $value) = each($data))
     {
         print("$key: $value<br>\r\n");    
     }


 echo "<h1>".$_SESSION['song_url']."</h1>";
 echo '<h1>'. $_SESSION['song_n'] .'</h1>';
  echo '<h1>'. $_SESSION['song_artist'] .'</h1>';
   echo '<h1>'. $_SESSION['song_album'] .'</h1>';
 
 header("location:insert_songr.php");
 
 ?>