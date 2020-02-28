<?php

ob_start(); // output buffering is turned on

session_start(); // turn on sessions

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

define("HOME_PATH", '/index.php');
define("WHAT_WE_DO_PATH", '/what-we-do.html');
define("TEAM_MEMBERS_PATH", '/team-members.html');
define("CHOOSE_A_CARD_PATH", '/choose-a-card.php');

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');
require_once('validation_functions.php');
require_once('auth_functions.php');

$db = db_connect();
$errors = [];

?>