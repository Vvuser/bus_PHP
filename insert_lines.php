<?php
header('Access-Control-Allow-Origin:*');
$start = $_POST['start'];
$end = $_POST['end'];
$city_id = $_POST['city_id'];
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'insert into dudu_lines (start,end,city_id) values ("'.$start.'","'.$end.'","'.$city_id.'")';
if($start){
	$res = mysqli_query($db, $sql);
	var_dump($res);
}

?>