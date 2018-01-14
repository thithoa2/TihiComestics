<?php
ini_set('display_errors', 1);
include 'db.php';
$fullname = trim($_POST['fullname']);
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$sex = intval( trim($_POST['sex']));
$password =trim($_POST['password']);
$repassword = trim($_POST['repassword']);
$address = trim($_POST['address']);

$msgErr = "";
$error = false;
if(empty($fullname)){
	$error= true;
	echo "không được để trống Họ Tên";
}



if (empty($password)){
	$error = true;
	echo "không để trống password";
}

if (empty($phone)){
	$error = true;
	echo "không để trống số điện thoại";
}

if ($repassword != $password){
	$error = true;
	echo "Nhập lại password sai";
}

if ($address==""){
	$error = true;
	echo "Không để trống đại chỉ";
}



if (!$error){

	$password = md5(md5($password));

	$sql = 'INSERT INTO `account` (`ho_ten`, `user_name`,`gioi_tinh`, `dien_thoai`,`password`, `dia_chi`) VALUES  (?, ?, ?, ?, ?, ?);';
	$stm = $conn->prepare($sql);
	if(!$stm)
		die('error');
	$stm->bind_param('ssssss', $fullname, $name, $sex, $phone, $password, $address);

	if(!$stm->execute()){
		die(" Không thể insert thông tin đã điền");
	}
	echo "Đăng Ký thành công";
}

 ?>