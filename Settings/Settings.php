<?php
    include '../sessionhandler.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn4Code - home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- sidebar -->
        <main class="d-flex flex-nowrap">     
            <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-light sticky-top" style="width: 280px;">
                <a href="../mainpage/Home.php" class="logo d-flex align-items-center">
                    <span>Learn4Code</span>
                </a>
                
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="../mainpage/Home.php" class="nav-link">
                        <i class="bi bi-lightbulb me-2"></i>LEARN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mainpage/Guide.php" class="nav-link">
                        SYNTAX
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mainpage/Profile.php" class="nav-link">
                        PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropend">
                            <a href="#" class="nav-link active text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                                MORE
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                                <li><a class="dropdown-item" href="Settings.php">SETTINGS</a></li>
                                <li><a class="dropdown-item" href="Settings.php?logout=true">LOG OUT</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="b-side-divider b-side-vr"></div>
        
            <div class="container text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-5 pt-4">
                        <p>content here</p>
                    </div>

                    <div class="col-5 d-flex flex-column align-items-center pt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-left: 0.7rem; text-align: left;">Account</h5>
                                <p class="card-text"></p>
                                <div class="button-service">
                                    <button type="button" class="btn">Preferences</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Profile</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Notification</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Courses</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Duolingo for Schools</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Social accounts</button>
                                </div>
                                <div class="button-service">
                                    <button type="button" class="btn">Privacy settings</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-left: 0.7rem; text-align: left;">Support</h5>
                                <div class="button-service">
                                    <button type="button" class="btn">Help Center</button>
                                </div>
                            </div>
                        </div>

                        <div class="button-out">
                            <a href="Settings.php?logout=true" type="button" class="btn">LOG OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </main> 
    </body>
</html>