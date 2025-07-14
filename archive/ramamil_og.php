ini_set('display_errors', '1');

function checkIgnore($tocheck) {
	$ignoreInputs = array(
	'recipient',
	'subject',
	'returnURL',
	'x',
	'y'
	);

	for ($i = 0; $i < count($ignoreInputs); $i++) {
		if ($tocheck == $ignoreInputs[$i]) {
			return false;
		}
	}

	return true;
}

$smsMessage = false;

function checkRecipient($tocheck) {
	$allowedDomains = array(
	'@txwes.edu',
	'@mail.txwes.edu',
	'@law.txwes.edu',
	'@department.txwes.edu'
	);

	$haltScript = true;

	for ($i = 0; $i < count($allowedDomains); $i++) {
		$regQ = "/^[_a-z0-9-]+(.[_a-z0-9-]+)*" . $allowedDomains[$i] . "/i";
		if (preg_match($regQ, $tocheck)) {
			$haltScript = false;
			if (strpos($tocheck,'att') >= 0 || strpos($tocheck,'sprint') >= 0 || strpos($tocheck,'google') >= 0) {
				$smsMessage = true;
			}
		}
	}

	if ($haltScript) {
		die("There has been an error in processing your response.<br/>Error Code: 00001<br/>Ineligible recipient.");
	}
}

function parseRecipients($tocheck) {
	if (substr_count($tocheck, " ") > 0) {
		$tocheck = str_replace(" ", "", $tocheck);
	}
	if (substr_count($tocheck, ",") > 0) {
		$tocheckArray = explode(",", $tocheck);
		for ($i = 0; $i < count($tocheckArray); $i++) {
			checkRecipient($tocheckArray[$i]);
		}
	}
	else {
		checkRecipient($tocheck);
	}
}

$fields = $_POST;
$fieldNames = array_keys($fields);

for ($k = 0; $k < count($fields); $k++) {
	if (is_array($fields[$fieldNames[$k]])) {
		$newvalue = '';
		for ($g = 0; $g < count($fields[$fieldNames[$k]]) - 1; $g++) {
			$newvalue .= $fields[$fieldNames[$k]][$g] . ', ';
		}
		$newvalue .= $fields[$fieldNames[$k]][count($fields[$fieldNames[$k]])-1];
		$fields[$fieldNames[$k]] = $newvalue;
	}
}

$returnURL = $fields['returnURL'];

$recipient = $fields['recipient'];
$subject = $fields['subject'];

parseRecipients($recipient);

if ($smsMessage) {

	$headers = "From: Texas Wesleyan University <communications@txwes.edu>\r\n";

	$message = '';

	for ($v = 0; $v < count($fieldNames); $v++) {
		if (checkIgnore($fieldNames[$v])) {
			$message .= str_replace("_", " ",$fieldNames[$v]) . ': ' . $fields[$fieldNames[$v]] . "\n";
		}
	}

	$pageContent = '<html><head><title>'.$subject.'</title></head><body><h3 style="text-align:center;">Web Form Results</h3><table width="700" align="center"><tbody>';
	for ($x = 0; $x < count($fieldNames); $x++) {
		if (checkIgnore($fieldNames[$x])) {
			$pageContent .= '<tr valign="top"><td width="200"><strong>' . str_replace("_", " ",$fieldNames[$x]) . ':</strong></td><td width="15"></td><td>' . $fields[$fieldNames[$x]] . "</td></tr>";
		}
	}
	$pageContent .= '</tbody></table></body></html>';

}
else {

	$headers = "From: Texas Wesleyan University <communications@txwes.edu>\n";
	$headers .= "Reply-To: Do Not Reply <no-reply@txwes.edu>\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><head><title>'.$subject.'</title></head><body><h3 style="text-align:center;">Web Form Results</h3><table width="700" align="center"><tbody>';

	for ($x = 0; $x < count($fieldNames); $x++) {
		if (checkIgnore($fieldNames[$x])) {
			$message .= '<tr valign="top"><td width="200"><strong>' . str_replace("_", " ",$fieldNames[$x]) . ':</strong></td><td width="15"></td><td>' . $fields[$fieldNames[$x]] . "</td></tr>";
		}
	}

	$pageContent = $message;
	$message .= '</tbody></table></body></html>';
	$pageContent .= '</tbody></table></body></html>';

}

try {
	if (mail($recipient, $subject, $message, $headers, "-f communications@txwes.edu")) {
		if (isset($returnURL)) {
			if (substr_count($returnURL,"txwes") > 0) {
				header('Location: ' . $returnURL);
			}
			else {
				header('Location: http://txwes.edu' . $returnURL);
			}
		}
		else {
			echo $pageContent;
		}
	}
	else {
		echo "<h3>Failure</h3>";
	}
}
catch (Exception $e) {
	throw new Exception('Something has gone wrong...', 0, $e);
}
