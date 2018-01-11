<?php
ini_set('display_errors', 1);
include '../model/db.php';
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$sex = intval( trim($_POST['sex']));
$password =trim($_POST['password']);
$repassword = trim($_POST['repassword']);
$day = intval( trim($_POST['days']));
$month = intval( trim($_POST['months']));
$year = intval( trim($_POST['year']));
$address = trim($_POST['address']);
$city = trim($_POST ['city']);
$msgErr = "";
$error = false;
if(empty($fullname)){
	$error= true;
	echo "không được để trống Họ Tên";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error=true;
	echo "Địa chỉ ". $email . "không đúng";
}

if (empty($password)){
	$error = true;
	echo "không để trống password";
}

if ($repassword != $password){
	$error = true;
	echo "Nhập lại password sai";
}

if ($address==""){
	$error = true;
	echo "Không để trống đại chỉ";
}

if (empty($city)){
	$error = true;
	echo "không để trống city";
}

if (!$error){
	$dayofbirth =mktime(0, 0, 0, $day, $month, $year);

	$password = md5(md5($password));

	$sql = 'INSERT INTO `account` (`fullname`, `email`,`sex`, `phone`,`password`, `dayofbirth`, `address`, `city`) VALUES  (?, ?, ?, ?, ?, ?, ?, ?);';
	$stm = $conn->prepare($sql);
	if(!$stm)
		die('error');
	$stm->bind_param('ssississ', $fullname, $email, $sex, $phone, $password, $dayofbirth, $address, $city);

	if(!$stm->execute()){
		die(" Không thể insert thông tin đã điền");
	}
	echo "Đăng Ký thành công";
}

 ?>