<?php

ini_set('max_execution_time', 0);

function fileToArray($file)
{
  $fileRef = fopen($file, "r");
  $textData = fread($fileRef, filesize($file));
  fclose($fileRef);

  return preg_split('/\s+/', $textData);
}

$dictionary = fileToArray("data-files/dictionary.txt");
$aliceWords = array_map('strtolower', fileToArray("data-files/AliceInWonderLand.txt"));


function linearSearch($item, $array)
{
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $item) {

      return $i;
    }
  }

  return -1;
}


function binaraySearch($item, $array)
{
  $li = 0;
  $ui = count($array) - 1;

  while ($li <= $ui) {
    $mi = floor(($li + $ui) / 2);
    if ($array[$mi] == $item) {


      return $mi;
    } else if ($item < $array[$mi]) {

      $ui = $mi - 1;
    } else {

      $li = $mi + 1;
    }
  }

  return -1;
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Spell Check</title>
</head>

<body>
  <h1>Spell Check</h1>
  <form method="post" action="linear.php">
    <p>Spell check a word (linear Search)<input type="text" name="linear"><button>Go</button></p>

  </form>
  <form method="get" action="binary.php">
    <p>Spell check a word (binaraySearch)<input type="text" name="binaray"><button>Go</button></p>

  </form>
  <form action="linearAlice.php">
    <p>Spell check Alice In Wonderland (linearSearch)<button>Go</button></p>

  </form>
  <form action="binaryAlice.php">
    <p>Spell check Alice In Wonderland (binaray search)<button>Go</button></p>

  </form>
</body>

</html>
