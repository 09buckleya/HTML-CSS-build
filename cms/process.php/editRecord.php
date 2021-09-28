<?php
require('../../includes/conn.inc.php');
require('../../includes/sessions.inc.php');
require('../../includes/functions.inc.php');

$splayerID = safeInt($_POST['playerID']);
$sinGameName = safeString($_POST['inGameName']);
$salliance = safeString($_POST['alliance']);
$svipLevel = safeInt($_POST['vipLevel']);
$scavalryT4 = safeInt($_POST['cavalryT4']);
$sinfantryT4 = safeInt($_POST['infantryT4']);
$sarcherT4 = safeInt($_POST['archerT4']);
$scavalryT5 = safeInt($_POST['cavalryT5']);
$sinfantryT5 = safeInt($_POST['infantryT5']);
$sarcherT5 = safeInt($_POST['archerT5']);

$sql = "UPDATE playerDetails SET inGameName = :inGameName,
                                alliance = :alliance,
                                vipLevel = :vipLevel,
                                cavalryT4 = :cavalryT4,
                                infantryT4 = :infantryT4,
                                archerT4 = :archerT4,
                                cavalryT5 = :cavalryT5,
                                infantryT5 = :infantryT5,
                                archerT5 = :archerT5,
                                WHERE playerID = :playerID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':inGameName', $sinGameName, PDO::PARAM_STR);
$stmt->bindParam(':alliance', $salliance, PDO::PARAM_STR);
$stmt->bindParam(':vipLevel', $svipLevel, PDO::PARAM_INT);
$stmt->bindParam(':cavalryT4', $scavalryT4, PDO::PARAM_INT);
$stmt->bindParam(':infantryT4', $sinfantryT4, PDO::PARAM_INT);
$stmt->bindParam(':archerT4', $sarcherT4, PDO::PARAM_INT);
$stmt->bindParam(':cavalryT5', $scavalryT5, PDO::PARAM_INT);
$stmt->bindParam(':infantryT5', $sinfantryT5, PDO::PARAM_INT);
$stmt->bindParam(':archerT5', $sarcherT5, PDO::PARAM_INT);
$stmt->bindParam(':playerID', $splayerID, PDO::PARAM_INT);
$stmt->execute();

header("Location: ../../editProfile.php");

exit;
?>