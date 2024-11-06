<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <form id="login" action="formhandler.php" method="POST">
            <label for="email">EMAIL</label>
            <input type="text" name="email" placeholder="E-mail address" required><br>
            
            <label for="password">PASSWORD</label>
            <input type="password" name="password" placeholder="Password" required><br>
    
            <input type="hidden" name="login" value="1">
    
            <button type="submit">LOGIN</button>
        </form>
    </div>

    <div class="levels-active">
        <a href="signin.php" button type="button" class="btn btn-levels mt-2"></a>
    </div>

    <div id="responseMessage"></div>
    <script>
        $('#login').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'formhandler.php',
                data: $(this).serialize(),
                success: function(response) {
                    $('#responseMessage').html(response);
                }
            });
        });
    </script>
</body>
</html>