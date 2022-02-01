<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH.'/public');
define("SHARED_PATH", PRIVATE_PATH. '/shared');
define("FORM_PATH", PRIVATE_PATH. '/form');
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public' )+ 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'],0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('db.php');
require_once('query_functions.php');
$db = db_connect();

if(!$db) {
    die(mysqli_connect_error());
}
?>