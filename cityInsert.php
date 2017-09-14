<?php
header('Access-Control-Allow-Origin:*');
$city_name = $_POST['city_name'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'insert into dudu_city_list (city_name) values ("'.$city_name.'")';
if($city_name){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}

?>