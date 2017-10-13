<?php
namespace Home\Controller;
use Think\Controller;
//用户登陆控制器
class LoginController extends Controller{
	//1.显示登陆页面
	function login(){
		$this->display();
	}
	//2.用户提交的信息与数据库作比较，验证用户登录：
	function  check(){
		$username=$_POST['username'];
		$password=md5($_POST['password']);	
		$ob=M('user');
		$re = $ob->where("username='$username' and password='$password'")->find();
		if($re){
			session_start();
			$_SESSION['username']=$username;
			$this->redirect('Index/index');
		}else{
			$this->error("登录失败，请重新登陆！",U("Login/login"));
		}
	}
	function close(){
		session_destroy();
		$this->redirect("Index/index");
	}
}
