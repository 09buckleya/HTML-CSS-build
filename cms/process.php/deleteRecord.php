<?php
require('../../includes/conn.inc.php');
require('../../includes/sessions.inc.php');
require('../../includes/functions.inc.php');

$splayerID = safeInt($_POST['playerID']);

$sql = "DELETE FROM playerdetails WHERE playerID = :playerID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':playerID', $splayerID, PDO::PARAM_INT);
$stmt->execute();

header("Location: ../../editProfile.php");

exit;
?>