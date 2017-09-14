<?php
header('Access-Control-Allow-Origin:*');
$id = $_POST['id'];
$username = $_POST['username'];
$telephone = $_POST['telephone'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'update dudu_user set username="'.$username.'",telephone="'.$telephone.'" where id='.$id.'';
if($id){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}
?>