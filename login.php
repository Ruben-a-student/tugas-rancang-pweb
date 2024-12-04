<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <a href="signin.php" class="sign-in-button" style="text-decoration: none">Sign Up</a>

    <div class="login-container">
        <form id="login" action="formhandler.php" method="POST" class="login-form">
            <label for="email">EMAIL</label>
            <input type="email" name="email" placeholder="E-mail address" required><br>
            
            <label for="password">PASSWORD</label>
            <input type="password" name="password" placeholder="Password" required><br>
    
            <input type="hidden" name="login" value="1">
    
            <button type="submit">LOGIN</button>
            <div id="responseMessage"></div>
        </form>
    </div>

    <script>
        $('#login').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'formhandler.php',
                data: $(this).serialize(),
                success: function(response) {
                    if(response.trim() === "success"){
                        window.location.href = 'mainpage/Home.php'
                    } else{
                        $('#responseMessage').html(response);
                    }
                }
            });
        });
    </script>
</body>
</html>

