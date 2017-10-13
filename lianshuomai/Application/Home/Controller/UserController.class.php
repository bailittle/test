<?php
namespace Home\Controller;
//用户注册控制器:
class UserController extends BaseController{
	function register(){
		$this->display();
	}
	function save(){
		$ob = D('User');
		$re = $ob->create();
		/*var_dump($re);
		exit;*/
		if($re){
		    $insertRe = $ob->add();
			if($insertRe){
				$username = $re['username'];
				$uid = $ob->field('uid')->where("username='$username'")->find();
				$ob = M('lsm_cart');
				$ob->add($uid);
				$this->success("注册成功！",U('Index/index'),3);
			}else{
				$this->error('注册失败！',U('User/register'));
			}	
		}else{
			$message = $ob->getError();
			$this->assign('message',$message);
			$this->assign('arr',$_POST);
			$this->display('User/register');
		}
	}
	function home(){
		$this->display();
	}
}
