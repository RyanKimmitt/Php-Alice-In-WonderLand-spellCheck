<?php

include('index.php');

function linearDictionarySearch($item, $dictionary)
{
  $time_start = microtime(true);
  $value = linearSearch($item, $dictionary);
  $time_end = microtime(true);

  $execution_time = number_format(($time_end - $time_start), 19);

  if ($value != -1) {
    echo $item . " is spelt correctly and is at postion " . $value . ", " . $execution_time . " seconds";
    return;
  }

  echo $item . " was spelt incorrectly, " . $execution_time . " seconds";
}

linearDictionarySearch($_POST["linear"], $dictionary);
