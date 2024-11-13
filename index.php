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
            --primary-color: #2550f7; 
            --text-color: #333;
            --button-bg: #2550f7;
            --button-hover-bg: #5779ff;
            --accent-color: #3051d1;
        }

        body, html {
            font-family: 'Poppins', sans-serif;
            background-color: #becaf7;
            color: var(--text-color);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
        }

        header .logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            color: #555;
        }

        .btn-primary {
            background-color: var(--button-bg);
            border: none;
            color: #fff;
            padding: 0.75rem 2rem;
            font-size: 1.25rem;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: var(--button-hover-bg);
        }

        .icons {
            font-size: 3rem;
            color: var(--accent-color);
            margin: 1rem 0;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Learn4Code</div>
        </header>
        
        <h1>Start Your Coding Journey Today</h1>
        
        <p>Learn the most in-demand coding languages and become a proficient programmer. Whether you're a beginner or looking to enhance your skills, we're here to guide you!</p>
        
        <div class="icons">
            <i class="bi bi-laptop"></i> <!-- Icon for visual appeal -->
        </div>
        
        <a href="login.php" class="btn btn-primary">Get Started</a>
    </div>
</body>
</html>