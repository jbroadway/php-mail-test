<?php

require_once ('config.php');
require_once ('Swift-4.1.6/lib/swift_required.php');

$msg = Swift_Message::newInstance ()
	->setFrom (array (MAIL_FROM => MAIL_FROM_NAME))
	->setTo (array (MAIL_TO => MAIL_TO_NAME))
	->setSubject ('Swift Test')
	->setBody ('This is a test email.');

$transport = Swift_MailTransport::newInstance ();
$mailer = Swift_Mailer::newInstance ($transport);
$res = $mailer->send ($msg);

if (! $res) {
	echo "ERROR!\n";
} else {
	echo "SENT!\n";
}

echo round (memory_get_peak_usage () / 1024) . " KB\n";

?>