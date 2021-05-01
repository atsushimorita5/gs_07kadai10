<?php
session_start();
include("atsumori_functions.php");

$id = $_GET['id'];
// DB接続&id名でテーブルから検索
$pdo = connect_to_db();

$sql = 'SELECT * FROM kadai_07 WHERE id=:id'; 
$stmt = $pdo->prepare($sql); 
$stmt->bindValue(':id', $id, PDO::PARAM_STR); 
$status = $stmt->execute();

if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
  // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
  // fetchAll()関数でSQLで取得したレコードを配列で取得できる
  // データの出力用変数（初期値は空文字）を設定
}  
//変数に値を入れてその変数をHTMLに入れるコードをかく

?>

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コンディショニングリスト（編集画面）</title>
  </head>
  <body>
  <form action="weight_create.php"method="post">
    <div class="title">1日のコンディションチェック</div>
    <div>
    ・朝の体重: <input type ="text" name="kg"placeholder="kg" size="5">
    </div>
    <div>
    ・目覚め時間: <input type ="time" name="mezame">
    </div>
    <div>
    ・昨日の就寝時間: <input type ="time"name="time">
    </div>
    <div>
    ・昨日の睡眠熟睡レベル: 
    <input type ="radio"name="level" value="熟睡できた">熟睡できた
    <input type ="radio"name="level" value="よく眠れた">よく眠れた
    <input type ="radio"name="level" value="まぁまぁ眠れた">まぁまぁ眠れた
    <input type ="radio"name="level" value="あまり眠れなかった">あまり眠れなかった
    </div>
    <div>
    ・1日のムーブ目標: <input type="text"name="conditontext" placeholder="ウォーキング30分など" size="77"value="">
    </div>
    <div>
    <button type="submit" >データ送信!!</button>
    <a href="weight_read.php">集計データはこちら</a>
    </div>
    </div>
    <input type="hidden" name="id" value="<?=$record['id']?>">
    </form>
  </body>
</html>