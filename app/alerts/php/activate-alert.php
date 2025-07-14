<?php

include("class-tx-wes-alerts.php");

if(isset($_POST["alert_id"])){

	$id = $_POST["alert_id"];

		$tx_wes_alert = new TxWesAlerts();
		$current_alert = $tx_wes_alert->alert_on($id);
	   $response=json_encode($current_alert);

		echo ($response);
}
