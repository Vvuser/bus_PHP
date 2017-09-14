<?php
header('Access-Control-Allow-Origin:*');
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'select * from dudu_stations';
$res = mysqli_query($db, $sql);
$arr = [];
while($re = mysqli_fetch_array($res, MYSQLI_ASSOC)){
	array_push($arr,$re);
}
echo json_encode($arr);
?>