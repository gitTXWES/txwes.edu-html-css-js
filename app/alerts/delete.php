<?php
if(isset($_GET["get_alert"])){
try {
	$tx_wes_alerts = new TxWesAlerts();

}
catch (Exception $e) {
	echo $e->getMessage();
}

?>
