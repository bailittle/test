<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>首页</title>
  <link rel="stylesheet" href="/lianshuomai/Public/css/home.css" />
  <link rel="stylesheet" href="/lianshuomai/Public/css/reset.css"/>
  <script src="/lianshuomai/Public/js/jquery-1.11.3.js"></script>
 </head>
 <body>
  <!-- header -->
      <div id="big_nav" class="clear">
      <ul class="ui-l">
        <li><a href="#">你好，欢迎来到连锁卖！</a></li>
        <?php if($username): ?><div class="lf">
        		<span>欢迎回来: <?php echo ($username); ?></span>
        		&nbsp;&nbsp;&nbsp;|&nbsp;
                <a href="/lianshuomai/index.php/Home/Login/close">退出登录</a>
        	</div>
        <?php else: ?>
            <div class="lf">
            	<a href="/lianshuomai/index.php/Home/Login/login">请登录</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="/lianshuomai/index.php/Home/User/register">免费注册</a>
            </div><?php endif; ?>      
      </ul>
      <ul class="ui-r">
        <li><a href="/lianshuomai/index.php/Home/Index/index">连锁卖首页</a></li>
        <li id="my_list"><a href="#">我的连锁卖<b></b></a>
        <div id="core">
          <ul>
           <?php if($username): ?><li><a href="/lianshuomai/index.php/Home/User/home">会员中心</a></li>
           <?php else: ?>
               <li><a href="javascript:;">会员中心</a></li><?php endif; ?>
           <li><a href="#">通卡中心</a></li>
           <li><a href="#">资金中心</a></li>
          </ul>
        </div>
        </li>
        <li><a href="#">帮助中心</a></li>
      </ul>
    </div>

  <div id="header" class="clear">
	   <div class="lf">
	       <img src="/lianshuomai/Public/images/ls_logonew.png" alt=""/>
	       <span>个人中心</span>
	   </div>
	   <div class="ri_logo">
		   <ul>
		     <li><b></b>即买即卖</li>
		     <li><b></b>优质供货</li>
		     <li><b></b>最惠采购</li>
		   </ul>
	   </div>
  </div>
  <!-- section -->
  <div id="section" class="clear">
  	<div class="left">
  		<div class="left-one">
  			<h3><i></i><a href="/lianshuomai/index.php/Home/Index/welcome"  target="show">个人中心</a></h3>
	  		<ul>
	  			<li><a href="/lianshuomai/index.php/Home/Home/address" target="show">管理收货地址</a></li>
	  			<li><a href="/lianshuomai/index.php/Home/Home/buy" class='col' target="show">我的购物车</a></li>
	  			<li><a href="javascript:;" target="show">我的代金券</a></li>
	  		</ul>
  		</div>
  		<div class="left-two">
  			<h3><i></i><a href="/lianshuomai/index.php/Home/Index/welcome" target="show"  target="show">必备工具</a></h3>
	  		<ul>
	  			<li><a href="javascript:;" target="show">摇一摇</a></li>
	  			<li><a href="javascript:;" target="show">主题换肤</a></li>
	  			<li><a href="javascript:;" target="show">我要定制</a></li>
	  		</ul>
  		</div>
  		<div class='left-three'>
  			<h3><i></i><a href="/lianshuomai/index.php/Home/Index/welcome" target="show">账号管理</a></h3>
	  		<ul>
	  			<li><a href="/lianshuomai/index.php/Home/Home/center" target="show">个人资料</a></li>
	  			<li><a href="javascript:;" target="show">密码修改</a></li>
	  			<li><a href="javascript:;" target="show">账号绑定</a></li>
	  		</ul>
  		</div>
  	</div>
  	<div class="right">
  		<div>
  		  <iframe name="show" src="/lianshuomai/index.php/Home/Index/welcome" id="show"></iframe>
  		</div>
  	</div>
  </div>
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
 </body>
</html>