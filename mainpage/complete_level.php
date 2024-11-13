<?php
include '../sessionhandler.php';
include '../connection.php';
//dbugger MY GOD IM STRESSING
error_log("POST Data: " . print_r($_POST, true));
// error_log("Session Data: " . print_r($_SESSION, true));


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['finish'])) {
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit;
    }
    //error_log("POST Request received: " . print_r($_POST, true));

    $level_id = intval($_POST['level_id']);
    $user_id = $_SESSION['user_id'];
    //error_log("User ID: " . $user_id . " is completing level ID: " . $level_id);

    $stmt = $pdo->prepare("SELECT * FROM user_progress WHERE user_id = :user_id AND level_id = :level_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':level_id', $level_id);
    $stmt->execute();
    $progress = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($progress){
        echo "You have already completed this level";
    } else{
        $stmt = $pdo->prepare("INSERT INTO user_progress (user_id, level_id, completed_at) VALUES (:user_id, :level_id, NOW())");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':level_id', $level_id);
        $stmt->execute();

        echo "success";
    }

} else{
    echo "invalid request";
}

?>