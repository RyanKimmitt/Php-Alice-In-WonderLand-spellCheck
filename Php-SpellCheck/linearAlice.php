<?php

include("index.php");

function linearAlice($item, $array)
{
  $time_start = microtime(true);
  $spellCount = 0;
  
  for ($i = 0; $i < count($item); $i++) {
    $value = linearSearch($item[$i], $array);
    if ($value == -1) {
      $spellCount++;
    }
  }
  $time_end = microtime(true);
  $execution_time = number_format(($time_end - $time_start), 19);

  echo "There are " . $spellCount . " missspelt words in Alice in Wonderland, " . $execution_time . " seconds";
}


linearAlice($aliceWords, $dictionary);
