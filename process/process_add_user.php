<?php 

include('../admin/class/user.class.php');
if(isset($_POST['register'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$ckpassword = $_POST['ckpassword'];

$userObj = new User();

if($password == $ckpassword){

$userObj->setUserName($name);
$userObj->setEmail($email);
$userObj->setPassword($password);
$userObj->setCkPassword($ckpassword);

$user = $userObj->addUser();
}else{
	header('location:../index.php?message=password mismatched');
}

}else{
	header('location:../index.php');
}



?>