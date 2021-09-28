<?php
    require('../includes/sessions.inc.php');
    require('../includes/conn.inc.php');

    $regLogin = filter_var($_POST['userLogin'], FILTER_VALIDATE_EMAIL);
    $regPassword = $_POST['password'];
    $regPasswordConfirm = $_POST['passwordConfirm'];

    if(!$regLogin) {
        $_SESSION['regError'] = 1;
        $referer = "signUp.php";
        header("Location: ../".$referer);
        exit;
    }

    if($regPassword != $regPasswordConfirm || $regPassword == ""){
        $_SESSION['regError'] = 2;
        $referer = "signUp.php";
        header("Location: ../".$referer);
        exit;
    }else {
        $sql = "SELECT * FROM users WHERE userLogin = :userLogin";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userLogin', $regLogin, PDO::PARAM_STR);
        $stmt->execute();
        $numUsers = $stmt->rowCount();
        if($numUsers == 1) {
            $_SESSION['regError'] = 3;
            $referer = "signUp.php";
        }else {
            $sql= "INSERT INTO users(userLogin, userPassword)
            VALUES (:userLogin, :userPassword)";
            $stmt = $pdo->prepare($sql);
            $hashedPw = password_hash($regPassword, PASSWORD_BCRYPT);
            $stmt->bindParam(':userLogin', $regLogin, PDO::PARAM_STR);
            $stmt->bindParam('userPassword', $hashedPw, PDO::PARAM_STR);
            $stmt->execute();
            if(isset($_SESSION['regError'])){
                unset($_SESSION['regError']);
            }
            $referer = "login.php";

        }
    }
    header("Location: ../".$referer);
    exit;
?>
