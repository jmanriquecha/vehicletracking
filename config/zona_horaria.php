<?php

// zona horaria

date_default_timezone_set('America/Bogota');

// fecha y hora actual

define("DATETIME", date('Y-m-d H:i:s'));
define("DATE", date('Y-m-d'));
define("HOUR", date('H'));
define("MINUTE", date('i'));
define("HOURANDMINUTE", HOUR . ":" . MINUTE);
define("SECOND", date('s'));