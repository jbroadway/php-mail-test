<?php

require_once ('config.php');
require_once ('PHPMailer_5.2.1/class.phpmailer.php');

$mail = new PHPMailer ();
$body = 'This is a test email.';
$mail->SetFrom (MAIL_FROM, MAIL_FROM_NAME);
$mail->AddAddress (MAIL_TO, MAIL_TO_NAME);
$mail->Subject = 'PHPMailer Test';
$mail->Body = 'This is a test email.';

$res = $mail->Send ();

if (! $res) {
	echo "ERROR!\n";
} else {
	echo "SENT!\n";
}

echo round (memory_get_peak_usage () / 1024) . " KB\n";

?>