<?php

	include("class-tx-wes-alerts.php");

   if(isset($_POST["alert_id"])){

	$id = $_POST["alert_id"];
	$alert_name = $_POST["alert_name"];
	$description = $_POST["alert_description"];
	$instructions = $_POST["alert_instructions"];



		$tx_wes_alerts = new TxWesAlerts();
		$current_alert = $tx_wes_alerts->update_alert($alert_name, $description, $instructions, $id);
	   $response=json_encode($current_alert);
		echo ($response);
}
