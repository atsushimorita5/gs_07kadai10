<?php
// var_dump($_POST);
// exit();

//if (
// !isset($_POST['kg']) || $_POST['kg']=='' ||
// !isset($_POST['mezame']) || $_POST['mezame']=='' 
// !isset($_POST['time']) || $_POST['time']=='' 
// !isset($_POST['level']) || $_POST['level']=='' 
// !isset($_POST['conditontext']) || $_POST['conditontext']=='' 
// ){
// exit('ParamError');
// }
session_start();
include("atsumori_functions.php");

$kg = $_POST["kg"];
$mezame = $_POST["mezame"];
$time = $_POST["time"];
$level = $_POST["level"];
$conditontext = $_POST["conditontext"];

// DB接続情報
$dbn = 'mysql:dbname=gsacs_d02_07;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
$pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
echo json_encode(["db error" => "{$e->getMessage()}"]);
exit();
}

$sql = 'INSERT INTO kadai_07(id, kg, mezame, time, level,conditontext)VALUES(NULL, :kg, :mezame, :time, :level, :conditontext)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':kg', $kg, PDO::PARAM_STR); 
$stmt->bindValue(':mezame', $mezame, PDO::PARAM_STR); 
$stmt->bindValue(':time', $time, PDO::PARAM_STR); 
$stmt->bindValue(':level', $level, PDO::PARAM_STR); 
$stmt->bindValue(':conditontext', $conditontext, PDO::PARAM_STR); 
$status = $stmt->execute(); // SQLを実行

if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
}else {
    // 登録ページへ移動
header('Location:weight_input.php');
exit();
}



// $array= array("$kg","$mezame","$time","$level","$conditontext");
// $file_handler = fopen('data/data.csv', 'r');
// fputcsv($file_handler, $array);
// // flock($file, LOCK_EX);
// // fwrite($file, $write_data);
// // flock($file, LOCK_UN);
// fclose($file);

// header("Location:weight_input.php");
// // echo"saveした"
?>

