<?php
header('Access-Control-Allow-Origin:*');
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'SELECT city.city_name,line.id,line.start,line.end FROM dudu_city_list AS city INNER JOIN dudu_lines AS line ON city.id=line.city_id';
$res = mysqli_query($db, $sql);
$arr = [];
while($re = mysqli_fetch_array($res, MYSQLI_ASSOC)){
	array_push($arr,$re);
}
echo json_encode($arr);
?>