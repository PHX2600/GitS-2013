<?php
$base = file_get_contents("kissed-copy.html");
$new = file_get_contents("kiss-copy.html");

$basearray = explode("\n",$base);
$newarray = explode("\n",$new);

/*
$alphas = array('h',
  'a',
  'v',
  'e',
  'y',
  'o',
  'u',
  'e',
  'v',
  'e',
  'r',
  'k',
  'i',
  's',
  's',
  'e',
  'd',
  'a',
  'g',
  'i',
  'r',
  'l'); */
$alphas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

//$alphas = range('A', 'Z');

for($i=0;$i<sizeof($newarray);$i++){
  $linecount = 0;

  for($j=0;$j<strlen($newarray[$i]);$j++){
    if(sizeof($basearray) > $i && strlen($basearray[$i]) > $j){
      if($newarray[$i][$j] == $basearray[$i][$j]){
        //echo ".";
        //echo $newarray[$i][$j];
      }
      else {
        //echo $newarray[$i][$j];
      }
    }
    else {
      //echo ":";
      //echo $newarray[$i][$j];
      $linecount++;
    }
  }
  if($linecount > 0) {
    echo $linecount;
    //echo $alphas[$linecount];
    echo "\n";
  }
  else {
    echo "\n";
  }
}
echo "DONE";
