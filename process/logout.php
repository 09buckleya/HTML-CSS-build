<?php
include('../includes/sessions.inc.php');

if(isset($_COOKIE[session_name()])){
setcookie(session_name(), '', time()-3600, '/WebsiteBuild', 'localhost', 1, 1);
}
$_SESSION = array();

session_destroy();

header("location:../login.php");

exit();
?>