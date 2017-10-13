<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
  public function _initialize(){
    session_start();
    if($_SESSION['username']){
      $this->assign('username',$_SESSION['username']);
    }
  }
}