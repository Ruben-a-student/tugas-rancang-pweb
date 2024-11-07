<?php
session_start();


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "project";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Terjadi masalah: " . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM admin WHERE email = :email";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
 
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            
            echo "Login successful! Welcome " . $user['username'] . ".";
           
            header("Location: landingpage.php");
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="email" name="email" placeholder="E-mail address" required>
            <input type="password" name="password" placeholder="Password" required>
            
            <button type="submit">Login</button>
        </form>
        
        <p>Don't have an account? <a href="index.php">Sign Up</a> instead.</p>
    </div>
</body>
</html>
