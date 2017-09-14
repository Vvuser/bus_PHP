<?php
header('Access-Control-Allow-Origin:*');
$id = $_POST['id'];
$start = $_POST['start'];
$end = $_POST['end'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'update dudu_user set start="'.$start.'",end="'.$end.'" where id='.$id.'';
if($id){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}
?>