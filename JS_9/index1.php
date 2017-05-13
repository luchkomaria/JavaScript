<?php
$name = $_POST["name"];
$password = $_POST["password"];
$adminpassword = "admin1!";
$adminname = "admin";
$username = "user";
$userpass = "user1!";
$status = 0;
if($name == $adminname && $password == $adminpassword){
	$status = 1;
	}
if($name == $username && $password == $userpass){
	$status = 2;}
if($status == 1){
	$user= array('name'=>$name, 'secret'=>'<li class="menu"><a href="personal.php">secretpage</a></li>', 'status'=>1);	
	$myJSON = json_encode($user);
	echo $myJSON;
}
if($status == 2){
	$user= array('name'=>$name,'status'=>2);	
	$myJSON = json_encode($user);
	echo $myJSON;
}
if($status == 0){
	$user= array('status'=>0);	
	$myJSON = json_encode($user);
	echo $myJSON;}
?>