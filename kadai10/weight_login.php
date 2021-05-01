<?php
session_start(); 
include('atsumori_functions.php'); 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="js/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="style.css">
<title>FORHログイン</title>
</head>
<body>
<form action="weight_input.php"method="POST">
<header id="login-header">
    <div class="wrap">
        <div class="clearfix"><h1 class="logo"><img src="logo.png" alt="forhlogo" width="220" height="220"></h1></div>
    </div>
</header>
<div id="content" class="wrap temp01">
<div class="inner">
<h2><div class="login">ログイン</div></h2>
<div class="panel01 clearfix loginForm">
<table class="inputtable">
<tbody>  
<tr>
<th class="loguinarea">ID</th>
<td> <input type="text" name="username" size="25" value="" class="text-field"　name="ID"></td>
</tr>
<tr>
<th class="passarea">パスワード<div class="english_translation_hide"></div></th>
    <td>
        <input type="password" name="password" size="25" value="" class="text-field" name="password">
    </td>
</tr>
<tr>
    <th>&nbsp;</th>
    <td>
        <a href="weight_register.php"class="arrowR">初めての方、パスワードをお忘れの方はこちら</a>
    </td>
</tr>
</tbody></table>
</div>
<div class="loginInfo">ログインに連続して10回失敗した場合、アカウントが一時的にロックされます</div>
<div class="submit-area">
</div>
<button class="btflat-btn">ログインする</button>
</form>
<footer id="global-footer">
<div class="wrap clearfix">
<div style="padding-top:10px;width:400px;margin:auto">
    <p class="copy" style="margin-top:20px">©️ FORH BODY PERFORMANCE ALL RIGHTS RESERVED.<img src="atsumori.jpeg" alt="atsu"width="100" height="45"></p>
</div>             
</footer>
<script>
</script>
</body>
</html>