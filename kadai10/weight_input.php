<?php
session_start(); 
include('atsumori_functions.php'); 

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>体重推移記録表</title>
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
        <button type="submit" id="button">データ送信!!</button>
        <P>きちんと入力することで日々のコンディション維持に繋がりますよ</P>
        <a href="weight_read.php">集計データはこちら</a>
    </div>
    <div class="memo"> 
    <p>------------------コンディションメモ------------------</p>
    <p>・朝起きたら朝日を浴びよう!!<br>
    ・これから30分散歩できる？<br>
    ・野菜、キノコ、海藻を多く食べようね!!<br>
    ・寝る前のストレッチは熟睡を促しますよ!!</p>
    </div>  
</form>
<script>
document.btn.addEventListener('click', function() {
document.submit();
});
//クルクル回るやす導入する
//$("#send").on("click",function(){
//$conditioning=""function(){<!-- 送信ボタンを押したらメモが表示される　送信中みたいな感じ がやりたい-->

</script>
</body>

</html>