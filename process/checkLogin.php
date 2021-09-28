<?php
    require('../includes/sessions.inc.php');
    require('../includes/conn.inc.php');
    $userLogin = filter_var($_POST['userLogin'], FILTER_VALIDATE_EMAIL);
    if($userLogin){
        $sql= "SELECT * FROM users Where userLogin = :userLogin";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_STR);
        $stmt->execute();
        $numUsers = $stmt->rowCount();
        if($numUsers == 0) {
            $_SESSION['loginError'] = 1;
            $referer = "login.php";
        }else{
            $row = $stmt->fetchObject();
            $dbPasswordHash = $row->userPassword;
            if(password_verify($_POST['password'], $dbPasswordHash)) {
                $userRights = $row->userRights;
                $userID = $row->userID;
                unset($_SESSION['loginError']);
                $_SESSION['login'] = $userRights;
                $_SESSION['user'] = $userID;
                $referer = "index.php";
                
            }else{
                $_SESSION['loginError'] = 1;
                $referer = "login.php";
            }
        }
    }else{
       $_SESSION['loginError'] = 1;
       $referer = "login.php";
       }
       header("Location: ../".$referer);
       
?>