<?php
    include '../sessionhandler.php';
    include '../connection.php';
    //debugging purpose
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $level_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

    $stmt = $pdo->prepare("SELECT title, content FROM levels WHERE id = :id");
    $stmt->bindValue(':id', $level_id, PDO::PARAM_INT);
    $stmt->execute();

    $level = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($level) {
        $title = $level['title'];
        $content = $level['content'];
    } else {
        echo "Level not found.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($level['title']);?> - Learn4Code</title>
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
                <div class="col-8 pt-4 justify-content-center">
                    <h1 class="mb-4"><?php echo htmlspecialchars($title); ?></h1>
                    <div class="card">
                        <div class="card-body">
                            <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
                        </div>
                    </div>
                    <div id ="notificationArea" class="alert alert-succes mt-4" style ="display: none;"></div>
                    <form id="finishForm" action="complete_level.php" method="POST">
                    <input type="hidden" name="finish" value="1">
                    <input type="hidden" name="level_id" value="<?php echo $level_id; ?>">
                    <button type="submit" class="btn btn-success mt-4">Finish Level</button>
                    </form>
                </div>
                

                <div class="col-4 d-flex flex-column align-items-center pt-4">
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
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="button-ads">
                                    <button type="button" class="btn">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    <script>
    $('#finishForm').on('submit', function(event) {
        event.preventDefault();
        
        console.log("Form submitted via AJAX!");
        console.log($(this).serialize());  // Log serialized data

        $.ajax({
            type: 'POST',
            url: 'complete_level.php',
            data: $(this).serialize(),  // Send serialized form data
            success: function(response) {
                console.log("Server Response: " + response);  // Log server response
                if(response.trim() === "success"){
                    window.location.href = 'Home.php';
                } else {
                    $('#notificationArea').html(response).addClass('alert-danger').show();
                }
            },
            error: function(xhr, status, error) {
                $('#notificationArea').html("An error occurred. Please try again.").addClass('alert-danger').show();
            }
        });
    });

</script>
</body>
</html>
</html>