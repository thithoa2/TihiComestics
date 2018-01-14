<?php
session_start();
ini_set('display_errors', 1);
include 'db.php';
$name = trim($_POST['name']);
$password = trim($_POST['password']);

$msgErr = "";
$error = false;
if(empty($name)){
	$error= true;
	echo "không được để trống tên đăng nhập";
}

if (empty($password)){
	$error = true;
	echo "không để trống password";
}



if (!$error){
	if($name=="admin" && $password == "123456789"){
		$_SESSION['admin'] = 1;
		header('Location: ../view/total-order.php');
	}
}else {
	

	$user = 'select username from account where ' . $name . ' = account.user_name';
	$pass = 'select password from account where ' . $password . ' = account.password';
	$id = 'select id_account from account where  ' . $name . ' = account.user_name and  account.password = '. $password ;

	if (!$error){
		if($name==$user && $password == $pass){
			$_SESSION['login'] = $id;
			header('Location: ../index.html');
		}
	}else {
		header('Location: ../view/admin.html');
	}
}
	

