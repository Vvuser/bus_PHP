<?php
header('Access-Control-Allow-Origin:*');
$username = $_POST['username'];
$password = $_POST['password'];

$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'select * from dudu_user where username="'.$username.'" and password="'.$password.'"';
$res = mysqli_query($db, $sql);
$num = mysqli_fetch_array($res, MYSQLI_ASSOC);

if($num){
	echo 1;
}else{
	echo 0;
}
?>