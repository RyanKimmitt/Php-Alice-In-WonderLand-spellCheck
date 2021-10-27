<?php

include("index.php");

function binarayAlice($item, $array)
{
  $time_start = microtime(true);
  $spellCount = 0;
  
  for ($i = 0; $i < count($item); $i++) {
    $value = binaraySearch($item[$i], $array);
    if ($value == -1){
      $spellCount++;
    }
  }
  $time_end = microtime(true);
  $execution_time = $time_end - $time_start;

  echo "There were " . $spellCount . " missspelt words in Alice in Wonderland, " . $execution_time . " seconds";
}


binarayAlice($aliceWords, $dictionary);
