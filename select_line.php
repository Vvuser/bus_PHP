<?php
header('Access-Control-Allow-Origin:*');
//$start = $_POST['start'];
//$end = $_POST['end'];
$start = '软件园南站';
$end = '上地西里';
$db = mysqli_connect('localhost', 'root', 'root', 'dudu_bus')or die('链接失败');
$db->set_charset('utf8');
$sql = 'select stations.name as name,stations.longitude as longitude,stations.latitude as latitude from dudu_lines as line inner join dudu_stations as stations where stations.line_id=line.id and line.start="'.$start.'" and line.end="'.$end.'"';
$res = mysqli_query($db, $sql);
$arr = [];
while($re = mysqli_fetch_array($res, MYSQLI_ASSOC)){
	array_push($arr,$re);
}
echo json_encode($arr);
?>