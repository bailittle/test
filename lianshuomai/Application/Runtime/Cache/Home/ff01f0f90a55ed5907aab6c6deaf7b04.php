<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心--购物车</title>
		<link href="/lianshuomai/Public/css/user.css" rel="stylesheet" />
	</head>
	<body>
		<div class="myForm">
            <i></i><h1>我的购物车</h1>
            <ul>
              <li><a href="#">全部订单</a></li>
              <li><a href="#" class='col'><b>待付款</b></a></li>
              <li><a href="#">待收货</a></li>
              <li><a href="#">已收货</a></li>
            </ul><br /><br />
            <table id="cart">
              <thead>
                <tr>
                  <th>商品图片 </th>
                  <th>商品信息 </th>
                  <th>单价(元) </th>
                  <th>数量 </th>
                  <th>实付款(元) </th>
                  <th>操作 </th>
                </tr>
              </thead>
              <tbody>
              	
              </tbody>
            </table>
        </div>
	</body>
</html>