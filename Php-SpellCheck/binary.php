<?php

include("index.php");

function binarayDictionaraySearch($item, $dictionary)
{
  $time_start = microtime(true);
  $value = binaraySearch($item, $dictionary);
  $time_end = microtime(true);

  $execution_time = $time_end - $time_start;

  if ($value != -1) {

    echo $item . " is spelt correctly and is at postion " . $value . ", " . $execution_time . " seconds";
    return;
  }

  echo $item . " was spelt incorrectly, " . $execution_time . " seconds";
}

binarayDictionaraySearch($_GET['binaray'], $dictionary);
