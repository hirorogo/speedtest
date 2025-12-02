<?php

session_start();

if ($_SESSION["contact-stage"] !== "confirm") {
  header("Location: ./index.php");
  exit();
}

$_SESSION["contact-stage"] = "complete";
$_SESSION["name"] = "";
$_SESSION["email"] = "";
$_SESSION["message"] = "";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D1</title>
</head>
<body>
  <h1>お問い合わせありがとうございます。</h1>
</body>

</html>