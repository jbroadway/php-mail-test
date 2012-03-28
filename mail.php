<?php

require_once ('config.php');

$res = mail (
	sprintf ('%s <%s>', MAIL_TO_NAME, MAIL_TO),
	'Mail Message',
	'This is a test email.',
	sprintf ("From: %s <%>\n", MAIL_FROM_NAME, MAIL_FROM)
);

if (! $res) {
	echo "ERROR!\n";
} else {
	echo "SENT!\n";
}

echo round (memory_get_peak_usage () / 1024) . " KB\n";

?>