<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>用户登陆界面</title>
  <link rel="stylesheet" href="/lianshuomai/Public/css/reset.css"/>
  <link rel="stylesheet" href="/lianshuomai/Public/css/login.css"/>
</head>
<body>
<div id="header">
    <div class="add">
      <div class="lf">
        <a href="../Index/index.html">
          <img src="/lianshuomai/Public/images/ls_logonew.png" alt=""/>
        </a>
        <span>登录</span>
      </div>
      <div class="ri_logo">
        <ul>
          <li><b></b>即买即卖</li>
          <li><b></b>优质供货</li>
          <li><b></b>最惠采购</li>
        </ul>
      </div>
  </div>
</div>
<form action="/lianshuomai/index.php/Home/Login/check" method="post">
<div id="main">
  <div id="login">
    <div class="header">
      <h3>登录连锁卖</h3>
      <a href="../User/register.html">新用户注册</a>
    </div>
    <div class="main">
      <div class="add">
        <div class="lf"></div>
        <input id="login_d" name="username" class="lf" type="text" autofocus placeholder="用户名/手机号/邮箱" />
      </div>
      <div>
        <div class="secoend  lf"></div>
        <input id="login_p" name="password" type="password" placeholder="请输入密码" required/>
      </div><a href="#">忘记密码？</a>
    </div>
    <div class="last">
      <input id="remen" type="checkbox"/>
      <label for="remen">记住用户名</label>
    </div>
    <input type="submit"  value="登  陆" />
  </div>
</div>
</form>
	  <div class="footer">
	  	<div class="first">
	  		<img src="/lianshuomai/Public/images/webCchart1.png" />
	  		<img src="/lianshuomai/Public/images/webCchart2.png" />
	  		<img src="/lianshuomai/Public/images/webCchart3.png" />
	  		<img src="/lianshuomai/Public/images/webCchart4.png" />
	  	</div>
	  	<div class="link">
		    <a href="#">关于我们</a>|
		    <a href="#">超客招募</a>|
		    <a href="#">隐私声明</a>|
		    <a href="#">友情链接</a>|
		    <a href="#">网站地图</a>
		  </div>
		  <div class="copy">
		    川B2-20140015 蜀ICP备13008743号-7 | Copyright© 连锁卖（liansuomai.com）2013-2016，All Rights Reserved
		  </div>
	  </div>
<script src="/lianshuomai/Public/js/jquery-1.11.3.js"></script>
</body>
</html>