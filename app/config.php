<?php

ob_start();
session_start();

date_default_timezone_set('America/Sao_Paulo');

define("URL","http://localhost/Character-Library");
define("URL_APP","http://localhost/Character-Library/app");
define("URL_INCLUDE","http://localhost/Character-Library/app/views/assets");

define("DATABASE","library");
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
?>