<?php

session_start();
 $_SESSION["alert_message"] = "";
include("class-tx-wes-alerts.php");

if($_POST["new_alert"]){
	$errors = [];
	$fields = ['alert_name', 'alert_description', 'alert_instructions'];
	$values = [];

	foreach ($fields as $field) {
		   if (empty(trim($_POST[$field]))) {
			   $errors[] = $field;
		   } else {
			   $values[$field] = htmlspecialchars($_POST[$field]);
		   }
	   }
		if(empty($errors)){
			 $tx_wes_alert = new TxWesAlerts();
			 $created_alert = $tx_wes_alert->create_new_alert($values["alert_name"], $values["alert_description"], $values["alert_instructions"]);


			 $response = json_encode(["success" => $created_alert, "name" => $values["alert_name"]]);

    		 echo ($response);
		   } else {
			   echo json_encode(["errors"=> $errors]);
		   }

}
