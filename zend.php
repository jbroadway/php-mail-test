<?php

ini_set ('include_path', ini_get ('include_path') . ':ZendFramework-1.11.11-minimal/library');
require_once ('config.php');
require_once ('Zend/Mail.php');
require_once ('Zend/Mail/Transport/Sendmail.php');

$mail = new Zend_Mail ();
$transport = new Zend_Mail_Transport_Sendmail ();
Zend_Mail::setDefaultTransport ($transport);
Zend_Mail::setDefaultFrom (MAIL_FROM, MAIL_FROM_NAME);

$mail->addTo (MAIL_TO, MAIL_TO_NAME);
$mail->setSubject ('Zend_Mail Test');
$mail->setBodyText ('This is a test email.');

$res = $mail->send ();

if (! $res) {
	echo "ERROR!\n";
} else {
	echo "SENT!\n";
}

echo round (memory_get_peak_usage () / 1024) . " KB\n";

?>