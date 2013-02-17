<?php
$base = file_get_contents("kissedagirl.html");
$new = file_get_contents("kiss-copy.html");

$basearray = explode("\n",$base);
$newarray = explode("\n",$new);

for($i=0;$i<sizeof($newarray);$i++){
  $linecount = 0;

  for($j=0;$j<strlen($newarray[$i]);$j++){
    if($newarray[$i][$j] == " "){
      echo "s";
    }
    if($newarray[$i][$j] == "\t"){
      echo "t";
    }
  }
  echo "\n";
}
echo "DONE";
