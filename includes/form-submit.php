<?php 
$errors = [];
$missing = [];
// check if the form has been submitted
if (isset($_POST['send'])) {
    // email processing script
	$to = 'killers@ashtonheald.xyz';
	$subject = 'MailList';
    // list expected fields
	$expected = ['email'];
	$required = ['email'];
    // create additional headers
	$headers = "From: Killers Discography<killers@ashtonheald.xyz>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	require('processmail.php');
	if ($mailSent) {
		header('Location: thank-you.php');
		exit;
	}
}
?>
