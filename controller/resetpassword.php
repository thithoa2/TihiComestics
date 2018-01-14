<?php
ini_set('display_errors', 1);
include 'db.php';

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$password =trim($_POST['password']);
$repassword = trim($_POST['repassword']);

$error = false;

if(empty($name)){
	$error = true;
	echo "Vui lòng nhập User Name";
}

if(strlen($password)<6){
	$error = true;
	echo "Vui lòng nhập mật khẩu lớn hơn 6 ký tự"
}

if($repassword != $password){
	$error =true;
	echo "Nhập lại mật khẩu sai"
}

if ()

