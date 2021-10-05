<?php
$myDir = "c:/xampp/htdocs/praktikumpwd/uploadfile/hasil_upload/";
$dir = opendir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while($tmp = readdir($dir)){
    echo "<a href='hasil_upload/$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
?>
