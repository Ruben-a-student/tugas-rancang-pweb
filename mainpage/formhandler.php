<?php
include 'connection.php';


// print_r($_POST); // Debuggerrrrr

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['login'])) { //buat form login

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        // echo "Login Form submitted. Email: $email, Password: $password";

        $stmt = $pdo->prepare("SELECT * FROM tb_user WHERE EMAIL = :email");
        $stmt->execute(['email'=> $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        // print_r($user); //anohterdbugger

        if ($user && password_verify($password, $user['PASSWORD'])) {
            echo "success";
        } else {
            echo "invalid username or password.";
        }
        


    } elseif (isset($_POST['signin'])) { //buat form sign in ea

        $nama = $_POST['nama']??'';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        $stmt = $pdo->prepare("SELECT * FROM tb_user WHERE EMAIL = :email");
        $stmt->execute(['email'=> $email]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if($existingUser){
            echo "an account with this email already exists.";
        } else{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("INSERT INTO tb_user (NAMA, EMAIL, PASSWORD) VALUES (:nama, :email, :password)");
            $stmt->execute(['nama' => $nama, 'email' => $email, 'password' => $hashedPassword]);
            echo "success";
        }

    } else {
        echo "Unknown form submitted.";
    }

} else {
    echo "Invalid request.";
}
