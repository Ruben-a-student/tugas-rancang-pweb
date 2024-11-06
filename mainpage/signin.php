<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- got no clue what half of these are for, but imma leave it be, i forgot probably font api(s) and some bootstrap that i don't even use lmao-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--supposedly JavaScript-->
</head>
<body>
    <form id="signin" action="formhandler.php" method="post">
        <label for="nama">USERNAME</label>
        <input type="text" name="nama" placeholder="Username" required><br>
        
        <label for="email">EMAIL</label>
        <input type="text" name="email" placeholder="Email adress" required><br>
        
        <label for="password">PASSWORD</label>
        <input type="password" name="password" placeholder="Password" required><br>

        <input type="hidden" name="signin" value="1">

        <button type="submit">SIGN IN</button>
    </form>

    <div class="levels-active">
        <a href="login.php" button type="button" class="btn btn-levels mt-2"></a>
    </div>                                   

    <div id="responseMessage"></div>
    <script>
        $('#signin').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'formhandler.php',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.trim() === "success") {
                        window.location.href = 'login.php'; 
                    }
                }
            })
        })
    </script>
</body>
</html>