<?php
namespace Home\Controller;

class IndexController extends BaseController {
    public function index(){
        $this->display();
	}
    public function sou(){
    	$search=$_REQUEST['sou'];
        $ob = M('phome');
		$rows = $ob->where("pname like '%$search%'")->select();
		//var_dump($rows);
    }
	public function welcome(){
		echo "<h2 style='text-align:center;'>欢迎进入个人中心</h2>";
	}
}