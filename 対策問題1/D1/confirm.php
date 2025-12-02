<?php

session_start();

if ($_SESSION["contact-stage"] !== "input") {
  header("Location: ./index.php");
  exit();
}
if (!$_POST || !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["message"])) {
  header("Location: ./index.php");
  exit();
}

$_SESSION["contact-stage"] = "confirm";
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["message"] = $_POST["message"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$message = $_SESSION["message"];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D1</title>
</head>

<body>
  <form action="./complete.php" method="post">
    <div>
      <label for="name">名前</label>
      <div>
        <input type="text" name="name" required disabled value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
      </div>
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <div>
        <input type="email" name="email" required disabled value="<?php echo htmlspecialchars($email, ENT_QUOTES); ?>">
      </div>
    </div>
    <div>
      <label for="message">お問い合わせ内容</label>
      <div>
        <textarea name="message" rows="10" required disabled><?php echo htmlspecialchars($message, ENT_QUOTES); ?></textarea>
      </div>
    </div>
    <div>
      <a href="./index.php">戻る</a>
      <button type="submit">送信する</button>
    </div>
  </form>
</body>

</html>