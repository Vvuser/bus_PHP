<?php
header('Access-Control-Allow-Origin:*');
$line_id = $_POST['line_id'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$name = $_POST['name'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'insert into dudu_stations (name,longitude,latitude,line_id) values ("'.$name.'","'.$longitude.'","'.$latitude.'","'.$line_id.'")';
if($name){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}

?>