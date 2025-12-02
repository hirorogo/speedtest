<?php

$array1 = ['apple', 'banana', 'orange'];
$array2 = ['banana', 'grape', 'kiwi'];
$diff1 = array_diff($array1, $array2);
$diff2 = array_diff($array2, $array1);
$diff = array_merge($diff1, $diff2);
foreach ($diff as $value) {
  echo "<p>$value</p>";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D2</title>
</head>

<body>
</body>

</html>