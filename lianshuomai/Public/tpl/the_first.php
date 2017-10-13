<?php
	header('Content-Type:application/json;charset=utf-8');
	$search=$_REQUEST['sou'];
	$conn=mysqli_connect('localhost','root','root','lsm');

	$sql='set names utf8';
	$result=mysqli_query($conn,$sql);

	$sql="SELECT pname FROM phome where pname like '%$search%'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_affected_rows($conn);
	$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($list);



