<?php
namespace Home\Model;
use Think\Model;
class UserModel  extends Model{
	protected  $patchValidate = true;
	protected  $_validate=array(
	    array('username','','用户名被占用',1,'unique'),
	    array('username','email','用户名格式不正确',1,'regex'),
	    array('nick','/^\S{2,10}$/','昵称格式不正确',1,'regex'),
	    array('password','/^\S{6,20}$/','密码不正确',1,'regex'),
	    array('repassword','password','两次密码不一致',1,'confirm'),
	    array('phone','/^1[3578]\d{9}$/','手机号码不正确',1,'regex'),
	    array('email','email','邮箱格式不正确',1,'regex'),
	);
	protected $_auto=array(
	    array('password','md5',1,'function'),
	    array('addtime','time',1,'function'),
	);
}
