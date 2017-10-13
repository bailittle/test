<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title>用户注册页面</title>
		<link rel="stylesheet" href="/lianshuomai/Public/css/reset.css"/>
        <link rel="stylesheet" href="/lianshuomai/Public/css/login.css"/>
        <script src="jquery-1.8.3.js"></script>
        <style>
        	#main{
			    height: 660px;
			    background: url('/lianshuomai/Public/images/loginbanner.jpg') repeat-y;
			    position: relative;
        	}
            #login{
            	width: 550px;
			    height: 600px;
			    left: 30%;
            }
            #login>input{
            	margin-left: 125px;
            	margin-top: 20px;
            }
            #main .table{
            	width: 510px;
            	font-size: 16px;
            	background: #F6F6F6;
            }
            #main .table tr{
            	display: flex;
            	padding: 16px;
            	justify-content: flex-start;
            }
            .x-left{
            	display: inline-block;
            	margin-top: 10px;
            }
            .x-right{
            	float: right;
            	margin-top: 10px;
            }
            .header>a{
            	float: right;
            }
        </style>
	</head>
	<body>
	  <div id="header">
	    <div class="add">
	      <div class="lf">
	        <a href="/lianshuomai/index.php/Home/User/index">
	          <img src="/lianshuomai/Public/images/ls_logonew.png" alt=""/>
	        </a>
	        <span>注册</span>
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
	  <div id="regist">
	  <form action="/lianshuomai/index.php/Home/User/save" method="post" >
	  	<div id='main'>
	  		<div id='login'>
	  		    <div class="header">
	  		    	<h3>新用户注册</h3>
	  		    	<a href="/lianshuomai/index.php/Home/Index/index">返回首页</a>
	  		    </div>
	  		    <div class="main">
				    <table class='table'>
						<tr>
							<td>用  户  名 ：</td>
							<td><input type="text" name="username" value="<?php echo ($arr["username"]); ?>" placeholder="请输入邮箱"/></td>
							<td><?php echo ($message["username"]); ?></td>
						</tr>
						<tr>
							<td>密　　码：</td>
							<td><input type="password" name="password" value="<?php echo ($arr["password"]); ?>"/></td>
							<td><?php echo ($message["password"]); ?></td>
						</tr>
						
						<tr>
							<td>确认密码：</td>
							<td><input type="password" name="repassword" value="<?php echo ($arr["repassword"]); ?>"/></td>
							<td><?php echo ($message["repassword"]); ?></td>
						</tr>
						<tr>
							<td>昵　　称：</td>
							<td><input type="text" name="nick" value="<?php echo ($arr["nick"]); ?>"/></td>
							<td><?php echo ($message["nick"]); ?></td>
						</tr>
						<tr>
							<td>邮　　箱：</td>
							<td><input type="text" name="email" value="<?php echo ($arr["email"]); ?>"/></td>
							<td><?php echo ($message["email"]); ?></td>
						</tr>
						<tr>
							<td>电　　话：</td>
							<td><input type="text" name="phone" value="<?php echo ($arr["phone"]); ?>"/></td>
							<td><?php echo ($message["phone"]); ?></td>
						</tr>
						<tr>
							<td>地　　址：</td>
							<td><input type="text" name="addr" value="<?php echo ($arr["addr"]); ?>"/></td>
							<td><?php echo ($message["addr"]); ?></td>
						</tr>
				    </table>
			      <p class="x-left">
	  		         <input  type="checkbox" checked="checked"/>我已阅读并同意
	  		         <a href="###">《用户注册协议》</a>
	  		      </p>
	  		      <p class="x-right">
	  		      	 已有账号？<a href="/lianshuomai/index.php/Home/Login/login">立即登录</a>
	  		      </p>
	  		    </div>
	  		    <input type="submit" value="注  册" />
			</div>
		</div>  
	  </form>
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