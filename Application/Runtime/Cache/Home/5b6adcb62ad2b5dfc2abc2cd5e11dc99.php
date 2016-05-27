<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FECM登陆</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/branch/Login/reset.css" /><link rel="stylesheet" type="text/css" href="/Public/css/branch/Login/supersized.css" /><link rel="stylesheet" type="text/css" href="/Public/css/branch/Login/style.css" />
</head>
<body>
        <div class="page-container">
            <h1>FECM管理员登陆</h1>
            <form action="Index/checkLogin" method="post">
                <input type="text" name="email" class="username" placeholder="邮箱">
                <input type="password" name="password" class="password" placeholder="密码">
                <img src="Index/verify" alt="验证码" title="点击刷新" class="verify_img">
                <input type="text" name="verify" class="verification" placeholder="验证码">
                <button type="submit">登陆</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
</body>
<script type="text/javascript" src="/Public/js/library/jquery.js"></script><script type="text/javascript" src="/Public/js/library/supersized.js"></script><script type="text/javascript" src="/Public/js/branch/login.js"></script>
</html>