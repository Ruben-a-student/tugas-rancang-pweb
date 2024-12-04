<?php
    include '../sessionhandler.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn4Code</title>
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
                <a href="Home.php" class="logo d-flex align-items-center">
                    <span>Learn4Code</span>
                </a>
                
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link">
                        <i class="bi bi-lightbulb me-2"></i>LEARN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Guide.html" class="nav-link active" aria-current="page">
                        <i class="bi bi-book-fill me-2"></i>GUIDEBOOK
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link">
                        <i class="bi bi-person"></i> PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropend">
                            <a href="#" class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-gear"></i> MORE
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                                <li><a class="dropdown-item" href="../Settings/Settings.php">SETTINGS</a></li>
                                <li><a class="dropdown-item" href="Guide.php?logout=true">LOG OUT</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="b-side-divider b-side-vr"></div>
        
            <div class="container text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-5 pt-4 text-start">
                        <div class="syntax">
                            <h5 class="fw-bold">What is C++?</h5>
                            <p>
                                C++ is a cross-platform language that can be used to create high-performance applications.
                                <br>
                                C++ was developed by nBjarne Stroustrup, as an extension to the C language.
                                <br>
                                C++ gives programmers a high level of control over system resources and memory.
                                <br>
                                The language was updated 5 major times in 2011, 2014, 2017, 2020, and 2023 to C++11, C++14, C++17, C++20, and C++23.
                            </p>
                            <h5 class="fw-bold">Why use C++</h5>
                            <p>
                                C++ is one of the world's most popular programming languages.
                                <br>
                                C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.
                                <br>
                                C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.
                                <br>
                                C++ is portable and can be used to develop applications that can be adapted to multiple platforms.
                                <br>
                                C++ is fun and easy to learn!
                                <br>
                                As C++ is close to C, C# and Java, it makes it easy for programmers to switch to C++ or vice versa.
                            </p>
                            <h5 class="fw-bold">Difference between C and C++</h5>
                            <p>
                                C++ was developed as an extension of C, and both languages have almost the same syntax.
                                <br>
                                The main difference between C and C++ is that C++ supports classes and objects, while C does not.
                            </p>
                        </div>
                    </div>


                    <div class="col-5 d-flex flex-column align-items-center pt-4">
                        <div class="mb-3" style="width: 21rem;">
                            <div class="dropdown-center d-flex justify-content-between">
                                <button type="button" class="btn me-2 w-100 dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-activity"></i> C++
                                </button>
                                <ul class="dropdown-menu">
                                    <li><span class="dropdown-item-text">Languages</span></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">CSS</a></li>
                                    <li><a class="dropdown-item" href="#">Java</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Add more</a></li>
                                </ul>
                                <button type="button" class="btn me-2 w-100">
                                    <i class="bi bi-fire"></i> 0
                                </button>
                                <button type="button" class="btn me-2 w-100">
                                    <i class="bi bi-trophy"></i> -
                                </button>
                            </div>
                        </div>
                        <div class="card-side">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Personalized ads</h5>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam accusamus nemo sit quia. Sapiente placeat mollitia tenetur cupiditate. Aut atque, quod assumenda molestias ipsa dolores vitae deserunt excepturi illo est.</p>
                                    <div class="button-ads">
                                        <button type="button" class="btn">Learn More</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Back to learning</h5>
                                    <a href="Home.php" class="btn btn-link leaderboard-link" style="text-decoration: none">View</a>
                                </div>
                                <div class="leaderboard-text">
                                    <p class="card-text">You're now on chapter 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> 
    </body>
</html>