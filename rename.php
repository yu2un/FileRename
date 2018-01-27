<?php 
$folderName = "img";
$newFolderName = "imgNew";

$folderFile = opendir($folderName);

$name = "image-thumb";

$i = 0;
while($file = readdir($folderFile)) {
    if($file == "." || $file == ".."){

    }else{
      rename($folderName.$file , $newFolderName.$name.$i);        
    }
    $i++;
}
?>
