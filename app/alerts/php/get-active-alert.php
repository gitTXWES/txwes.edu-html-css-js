<?php

include("class-tx-wes-alerts.php");

if (isset($_GET["active_alert"])) {
	$tx_wes_alerts = new TxWesAlerts();
	$active_alerts = $tx_wes_alerts -> get_all_active_alerts();

	$response=json_encode($active_alerts);
	echo ($response);

}
