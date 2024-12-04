<?php
include '../sessionhandler.php';
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id']; 

    try {
        
        $stmt = $pdo->prepare("DELETE FROM tb_user WHERE id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt = $pdo->prepare("DELETE FROM user_progress WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        session_destroy();
        header("Location: ../index.php"); 
        exit();
    } catch (Exception $e) {
        echo "Error deleting account: " . $e->getMessage();
    }
}
?>
