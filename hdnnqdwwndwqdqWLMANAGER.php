<?php
$a = $_GET["SxfKey"];
$b = $_GET["key"];
if(!isset($a)) {
return; 
}
if ($a === "9081DelndjadnadsadaLODRAMAdhwdlavodramadnajdaudy3g32sandrine") {
  echo "hi...";
  if(!isset($b)) {
    echo "include";
   return; 
  }
  if($b === "") {
   echo "1E";
    return;
  }
$fh = fopen('whitelistedd.lua', 'a'); 
fwrite($fh, $b."\n");
}
else
{
 return; 
}
?>
