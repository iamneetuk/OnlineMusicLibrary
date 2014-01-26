<?php



$sDir = 'Upp/';

$aFiles = array();

$rDir = opendir($sDir);

if ($rDir) {

    while ($sFile = readdir($rDir)) {

        if ($sFile == '.' or $sFile == '..' or !is_file($sDir . $sFile))

            continue;

 

        $aPathInfo = pathinfo($sFile);

        $sExt = strtolower($aPathInfo['extension']);

        if ($sExt == 'mp3') {

            $aFiles[] = $sDir . $sFile;

			
			
			
        }

 }
//print_r($aFiles);
//echo sizeof($aFiles);
for($i=0;$i<sizeof($aFiles);$i++)
{
echo $aFiles[$i];
echo "<br>";

}


    closedir( $rDir );

}
?>