<?php

session_start();

$_SESSION["contact-stage"] = "input";
$name = $_SESSION["name"] ?? "";
$email = $_SESSION["email"] ?? "";
$message = $_SESSION["message"] ?? "";

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D1</title>
</head>

<body>
  <form action="./confirm.php" method="post">
    <div>
      <label for="name">名前</label>
      <div>
        <input type="text" name="name" required value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
      </div>
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <div>
        <input type="email" name="email" required value="<?php echo htmlspecialchars($email, ENT_QUOTES); ?>">
      </div>
    </div>
    <div>
      <label for="message">お問い合わせ内容</label>
      <div>
        <textarea name="message" rows="10" required><?php echo htmlspecialchars($message, ENT_QUOTES); ?></textarea>
      </div>
    </div>
    <div>
      <button type="submit">確認する</button>
    </div>
  </form>
</body>

</html>