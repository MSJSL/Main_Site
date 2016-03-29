<?php
	require_once('db.php');

	$ins_fields = '';
	$ins_values = '';
	
	foreach($_POST as $field_name => $field_value){
		if(is_array($field_value)){
			$field_value = join(',',$field_value);
		}
		$ins_fields .= '`'.mysqli_real_escape_string($db_link, $field_name).'`,';
		$ins_values .= '\''.mysqli_real_escape_string($db_link, $field_value).'\',';
	}
	
	$ins_fields = rtrim($ins_fields, ",");
	$ins_values = rtrim($ins_values, ",");
	
	$sql_query = "INSERT INTO `registrations` (" .$ins_fields. ") VALUES (" . $ins_values . ")";
	$query_res = mysqli_query($db_link, $sql_query) or die( mysqli_error($db_link));
	$register_id = mysqli_insert_id($db_link);
	
	header('Location: https://www.msjsl.com/payment.php?registrant='.$register_id);
?>