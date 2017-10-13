<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/lianshuomai/Public/css/reset.css"/>
        <link rel="stylesheet" href="/lianshuomai/Public/css/home.css" />
        <link rel="stylesheet" href="/lianshuomai/Public/css/pro.css" />
        <link rel="stylesheet" href="/lianshuomai/Public/css/nav.css" />
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

        <!-- nav -->
        <div id="w">
	<div class="logo">
		<a href="/lianshuomai/index.php/Home/Product/index"><img src="/lianshuomai/Public/images/ls_logonew.png"/><img src="/lianshuomai/Public/images/hitpic.png" alt=""/></a>
	</div>
	<div class="search">
        <input type="text" name="sou" id="sou" required  placeholder="请输入你要检索的内容"/>
        <button id="send"><i></i></button>
    </div>
    <div class="shopping">
    	<?php if($username): ?><a href="/lianshuomai/index.php/Home/User/home"><i></i>购物车
	    	    <span class="count">0</span>
	    	</a>
	    	<div>
	    		<ul class="sbuy">
	    			<li>
	    				<img src="" />
	    				<span>aaaaaa</span>
	    				<span>aaaa</span>
	    				<b>￥xx</b>
	    				<a href="">cccc</a>
	    			</li>
	    				购物车还没有挑选商品，<a href="">现在去挑选</a>
	    		</ul>
	    	</div>
    	<?php else: ?>
	    	<a href="#"><i></i>购物车
	    	    <span class="count">0</span>
	    	</a><?php endif; ?>
    </div>
</div>
<div id="nav">
    <ul>
      <li><a href="/lianshuomai/index.php/Home/Index/index">首页</a></li>
      <li><a href="#">女装/男装</a></li>
      <li><a href="#">日用百货</a></li>
      <li><a href="#">户外运动</a></li>
      <li><a href="#">数码家电</a></li>
      <li><a href="#">食品美食</a></li>
    </ul>
</div>
        <div id="section">
		    <div>
		      <div class='sec_top'>
		        <ul>
		          <li>&nbsp;><a href="javascript:;">&nbsp;&nbsp;连衣裙</a>&nbsp;</li>
		        </ul>
		      </div>
		      <div class="sec_middle" id='plist'>
		        <ul>
		          <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
		              <a href="/lianshuomai/index.php/Home/Product/proDetail"><img src="/lianshuomai/Public/<?php echo ($data["pic"]); ?>"/></a>
		              <a href="/lianshuomai/index.php/Home/Product/proDetail"><h4><?php echo (mb_substr($data["pname"],0,15)); ?></h4></a>
		              <a href="/lianshuomai/index.php/Home/Product/proDetail"><h3>￥<?php echo ($data["price"]); ?></h3></a>
		              <a href="<?php echo ($data["pid"]); ?>" class='addcart'><img src="/lianshuomai/Public/images/pinkcar.png"/></a>
		            </li><?php endforeach; endif; else: echo "" ;endif; ?>
		        </ul>
		        <ol class="pager">
		          <?php echo ($pageStr); ?>
		        </ol>
		      </div>
		    </div>
		</div>
        <!-- footer -->
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