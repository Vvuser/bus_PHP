<?php
header('Access-Control-Allow-Origin:*');
$id = $_POST['id'];
$city_name = $_POST['city_name'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'update dudu_city_list set city_name="'.$city_name.'" where id='.$id.'';
if($id){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}
?>