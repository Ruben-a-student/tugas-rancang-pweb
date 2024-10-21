<?php
// Database connection details
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

   
    if ($password === $confirm_password) {
       
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        $sql = "INSERT INTO admin(username, password, email) VALUES (:username, :password, :email)";
        $stmt = $db->prepare($sql);

 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);

     
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Failed to register. Please try again.";
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; }
        .password-container { position: relative; }
        .eye-icon { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required>
            
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="eye-icon" onclick="togglePassword('password')">👁️</span>
            </div>
            
            <div class="password-container">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                <span class="eye-icon" onclick="togglePassword('confirm_password')">👁️</span>
            </div>
            
            <input type="email" name="email" placeholder="E-mail address" required>
            
            <button type="submit">Sign Up</button>
        </form>
        
        <p>Already have an account? <a href="login.php">Sign In</a> instead.</p>
        
        <p>Alternatively, sign in with:</p>
        <button>Google</button>
        <button>GitHub</button>
    </div>

    <script>
        function togglePassword(inputId) {
            var input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>
</body>
</html>
