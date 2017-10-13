<?php
namespace Home\Controller;

class ProductController extends BaseController{
	public function pro(){
		//读取数据库中的商品信息
		$ob = M('product');
		//1.获取商品总记录数
		$num = $ob->count();
		//2.设定每页显示条数：
		$pagesize = 6;
		//3.实例化分页类：
		$page = new \Think\Page($num,$pagesize);
		$start = $page->firstRow;
		$pageStr = $page->show();
		$rows = $ob->limit("$start,$pagesize")->select();
		$this->assign('rows',$rows);
		$this->assign('pageStr',$pageStr);
		$this->display();
	}
	public function proDetail(){
		//点进去商品详细页：
		
		$this->display();
	}
}
