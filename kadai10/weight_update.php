<?php
// var_dump($_POST);
// exit();
session_start();
include("atsumori_functions.php");


$kg = $_POST["kg"];
$mezame = $_POST["mezame"];
$time = $_POST["time"];
$level = $_POST["level"];
$conditontext = $_POST["conditontext"];

$pdo = connect_to_db();

$sql = 'INSERT INTO kadai_07(id, kg, mezame, time, level,conditontext)VALUES(NULL, :kg, :mezame, :time, :level, :conditontext)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':kg', $kg, PDO::PARAM_STR); 
$stmt->bindValue(':mezame', $mezame, PDO::PARAM_STR); 
$stmt->bindValue(':time', $time, PDO::PARAM_STR); 
$stmt->bindValue(':level', $level, PDO::PARAM_STR); 
$stmt->bindValue(':conditontext', $conditontext, PDO::PARAM_STR); 
$status = $stmt->execute(); // SQLを実行

if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
  } else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    header("Location:weight_read.php");
    exit();
  }
