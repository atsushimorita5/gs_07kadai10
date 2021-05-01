<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストユーザ登録画面</title>
</head>

<body>
  <form action="weight_register_act.php" method="POST">
    <fieldset>
      <legend>ユーザ登録画面</legend>
      <div>
        ID: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>
      <div>
        <button>登録する</button>
      </div>
      <a href="weight_login.php">ログイン画面はこちら</a>
    </fieldset>
  </form>

</body>

</html>