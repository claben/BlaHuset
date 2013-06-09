<?php
DEFINE('DATABASE_USER', '117625-gf14712'); //sätter databaskoppling, användarnamn etc.
DEFINE('DATABASE_PASSWORD', 'blahuset');
DEFINE('DATABASE_HOST', 'mysql06.citynetwork.se');
DEFINE('DATABASE_NAME', '117625-blahuset');
date_default_timezone_set('UTC'); //koppling för mail, används ej. Sätter datumzon
/*ini_set('SMTP', "mail.kurshyllan.se");
define('EMAIL', 'info@kurshyllan.se'); */
DEFINE('WEBSITE_URL', 'http://blahuset.bennedahl.se'); //root-url
$con = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
DATABASE_NAME); //databaskopplingen.
$con->set_charset('utf8'); //connectionen görs med utf8, för att tillåta åäö
if (!$con) {
trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>