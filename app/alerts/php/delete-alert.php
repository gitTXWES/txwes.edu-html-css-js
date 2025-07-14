<?php

include("class-tx-wes-alerts.php");

if($_POST["alert_id"]){
	$alert_id = $_POST["alert_id"];

		$tx_wes_delete_alert = new TxWesAlerts();
		$delete_alert = $tx_wes_delete_alert->delete_alert($alert_id);
	    $response=json_encode($delete_alert);
		echo ($response);
}
