<?php

session_start();
include('atsumori_functions.php');

// var_dump($_POST);
// exit();

$pdo = connect_to_db();
$username = $_POST['username'];
$password = $_POST['password'];


$sql = 'SELECT * FROM user_table WHERE username=:username AND password=:password AND is_deleted=0';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

$val = $stmt->fetch(PDO::FETCH_ASSOC); // 該当レコードだけ取得 
if (!$val) { // 該当データがないときはログインページへのリンクを表示
    echo "<p>ログイン情報に誤りがあります.</p>"; 
    echo '<a href="weight_login.php">login</a>';
    exit();
} else {
    $_SESSION = array(); // セッション変数を空にする 
    $_SESSION["session_id"] = session_id();
    $_SESSION["is_admin"] = $val["is_admin"]; 
    $_SESSION["username"] = $val["username"]; 
    $_SESSION["id"] = $val["id"];
    header("Location:weight_read.php"); // 一覧ページへ移動
    exit();
}

