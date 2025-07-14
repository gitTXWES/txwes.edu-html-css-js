<?php

include("class-tx-wes-alerts.php");

if(isset($_GET["get_alert"])){
	$tx_wes_alerts = new TxWesAlerts();
	$current_alert = $tx_wes_alerts->get_alert_by_id($_GET["alert_id"]);
  $response=json_encode($current_alert);
	echo ($response);
}
