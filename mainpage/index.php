<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn4Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        :root {
            --primary-color: #58cc02;
            --secondary-color: #fff;
            --text-color: #3c3c3c;
            --accent-color: #ffc800;
        }

        body, html {
            font-family: 'poppins', sans-serif;
            color: var(--text-color);
            background-color: #f7f7f7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            padding: 20px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links a {
            color: var(--secondary-color);
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .btn{
            height: 3rem;
            width : 20rem;
        }

        .containermid{
            display: flex;
            justify-content: center;
        }
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Learn4code</div>
            </nav>
        </div>
    </header>
    <div class="containermid">
        <div class="interactable">
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
        </div>
    </div>
</body>
</html>