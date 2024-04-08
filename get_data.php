<?php
include('db.php');
$id=$_POST['id'];
$type=$_POST['type'];

if($type=='city'){
	$sql="select id,name from city where state_id='$id'";
}else{
	$sql="select id,name from state where country_id='$id'";
}
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
$html='';
foreach($arr as $list){
	$html.='<option value='.$list['id'].'>'.$list['name'].'</option>';
}
echo $html;
?>