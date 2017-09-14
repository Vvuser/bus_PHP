<?php
header('Access-Control-Allow-Origin:*');
$id = $_POST['id'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'delete from dudu_stations where id='.$id.'';
if($id){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}
?>