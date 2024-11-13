<?php
    include '../sessionhandler.php';
    include '../connection.php';

    try {
        // Fetch all levels from the database
        $stmt = $pdo->prepare("SELECT id, title FROM levels ORDER BY id ASC");
        $stmt->execute();
        $levels = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // fetch progress
        $user_id = $_SESSION['user_id'];
        $stmt = $pdo->prepare("SELECT level_id FROM user_progress WHERE user_id= :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        $completedLevels = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $e) {
        echo "Error fetching levels: " . $e->getMessage();
        $levels = [];
        $completedLevels = [];
    }

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <!-- sidebar -->
        <main class="d-flex flex-nowrap">     
            <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-light sticky-top">
                <a href="Home.php" class="logo d-flex align-items-center">
                    <span>Learn4Code</span>
                </a>
                
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link active" aria-current="page">
                        <i class="bi bi-lightbulb me-2"></i>LEARN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Guide.php" class="nav-link">
                        GUIDEBOOK
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link">
                        PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropend">
                            <a href="#" class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            MORE
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="z-index: 1050;">
                                <li><a class="dropdown-item" href="../Settings/Settings.php">SETTINGS</a></li>
                                <li><a class="dropdown-item" href="Home.php?logout=true">LOG OUT</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="b-side-divider b-side-vr"></div>
        
            <div class="container text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-5 pt-4 justify-content-center">
                    <?php if (!empty($levels)): $counter = 0;?>
                        <?php foreach ($levels as $level): ?>
                            <?php
                                $isCompleted = in_array($level['id'], $completedLevels);
                            ?>
                            <?php
                                if ($counter % 5 === 0 or $counter === 0): ?>
                                    <div class="guidebook-active">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="card-text title">Unit 1, section 1</p>
                                                        <p class="card-text subtitle">Introduction to C++</p>
                                                    </div>
                                                    <div class="col-6 d-flex justify-content-end">
                                                        <a href="Guide.php" button type="button" class="btn btn-guide mt-2">guidebook</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                <?php endif;
                                $counter++;
                                ?>
                                <div class="<?php echo $isCompleted ? 'levels-active' : 'levels'; ?>">
                                    <button type="button" class="btn btn-levels mt-2" onclick="location.href='level.php?id=<?php echo $level['id']; ?>'"></button>
                                </div>
                                <br>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No levels available.</p>
                    <?php endif; ?>
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
                    </div>
                </div>
            </div>
        </main> 
    </body>
</html>