
<?php
include_once "gettext.php";

$getter = new Gettext_PHP("./tests","gettext","en");

echo $getter->gettext('File is too small');

echo "ok";