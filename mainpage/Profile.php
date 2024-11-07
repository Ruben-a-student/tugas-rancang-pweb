<?php
    include 'sessionhandler.php';
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
                        <a href="Guide.php" class="nav-link">
                        GUIDEBOOK
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link active" aria-current="page">
                        PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropend">
                            <a href="#" class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                MORE
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                                <li><a class="dropdown-item" href="#">SCHOOLS</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../Settings/Settings.html">SETTINGS</a></li>
                                <li><a class="dropdown-item" href="#">LOG OUT</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="b-side-divider b-side-vr"></div>
        
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-5 pt-4 justify-content-center">
                        <div class="content-square text-center mb-3">
                            <p class="mb-0">Profile picture</p>
                        </div>
                        <div class="text-center mt-3">
                            <h5 class="fw-bold mb-0">Nickname</h5>
                            <p class="text-muted mb-0">Nickname</p>
                            <p class="text-muted">Joined date</p>

                            <p>
                                <a href="#" class="text-primary fw-bold me-3">Following</a>
                                <a href="#" class="text-primary fw-bold">Follower</a>
                            </p>
                        </div>
                        <hr>
                        <div class="statistics">
                            <h5 class="fw-bold">Statistics</h5>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="card p-3 border-1 shadow-sm">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2" style="font-size: 24px;">🔥</span>
                                            <div>
                                                <h6 class="fw-bold mb-0">0</h6>
                                                <small class="text-muted">Day streak</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 border-1 shadow-sm">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2" style="font-size: 24px; color: #FFD700;">⚡</span>
                                            <div>
                                                <h6 class="fw-bold mb-0">6269</h6>
                                                <small class="text-muted">Total XP</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 border-1 shadow-sm">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2" style="font-size: 24px; color: #8B00FF;">💎</span>
                                            <div>
                                                <h6 class="fw-bold mb-0">Amethyst</h6>
                                                <small class="text-muted">Current league</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card p-3 border-1 shadow-sm">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2" style="font-size: 24px; color: #FFD700;">🏅</span>
                                            <div>
                                                <h6 class="fw-bold mb-0">4</h6>
                                                <small class="text-muted">Top 3 finishes</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-5 d-flex flex-column align-items-center pt-4">
                        <div class="mb-3" style="width: 21rem;">
                            <div class="dropdown-center d-flex justify-content-between">
                                <button type="button" class="btn me-2 w-100 dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-activity"></i>c++
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
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Add friends</h5>
                                </div>
                                <div class="friend-text text-start">
                                    <div class="button-friend">
                                        <button type="button" class="btn text-start w-100">Find Friends</button>
                                    </div>
                                    <div class="button-friend">
                                        <button type="button" class="btn text-start w-100">Invite Friends</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> 
    </body>
</html>