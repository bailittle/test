<?php
namespace Home\Controller;

//个人中心页：
class HomeController extends BaseController {
  public function home(){
  	if($_SESSION['username']){
  		$this->display();
  	}else{
  		$this->redirect('Home/home');
  	}
  }
  //个人中心 —— 购物车
  public function buy(){
  	$this->display();
  }
  //个人中心 —— 收货地址
  public function address(){
  	$this->display();
  }
  //个人中心 —— 账号管理
	public function center(){
		$this->display();
	}
}