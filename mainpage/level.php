<?php
include '../sessionhandler.php';
include '../connection.php';

// Debugging for development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get level ID from query string or default to 1
$level_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Fetch level details
$stmt = $pdo->prepare("SELECT title, content FROM levels WHERE id = :id");
$stmt->bindValue(':id', $level_id, PDO::PARAM_INT);
$stmt->execute();

$level = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch questions if this is a quiz level (every fifth level)
$is_quiz_level = ($level_id % 5 === 0);
$questions = [];

if ($is_quiz_level) {
    $questionsStmt = $pdo->prepare("SELECT * FROM quizzes WHERE level_id = :level_id");
    $questionsStmt->bindValue(':level_id', $level_id, PDO::PARAM_INT);
    $questionsStmt->execute();

    $questions = $questionsStmt->fetchAll(PDO::FETCH_ASSOC);
}

// Handle missing level case
if (!$level) {
    echo "Level not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($level['title']); ?> - Learn4Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                        <i class="bi bi-lightbulb me-2"></i> LEARN
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Guide.php" class="nav-link">
                        <i class="bi bi-book me-2"></i> GUIDEBOOK
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
                            <li><a class="dropdown-item" href="Home.php?logout=true">LOG OUT</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="b-side-divider b-side-vr"></div>

        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-8 pt-4">
                    <h1 class="title-content"><?php echo htmlspecialchars($level['title']); ?></h1>
                    <div class="card-main">
                        <div class="card">
                            <div class="card-body">
                                <p><?php echo nl2br($level['content']); ?></p>
                                <?php if ($is_quiz_level && $questions): ?>
                                    <div class="quiz-section mt-4">
                                        <form id="quizForm" method="POST">
                                            <?php foreach ($questions as $question): ?>
                                                <div class="quiz-question">
                                                    <p><?php echo htmlspecialchars($question['question']); ?></p>
                                                    <input type="hidden" name="level_id" value="<?php echo $level_id; ?>">
                                                    <input type="hidden" name="question_ids[]" value="<?php echo $question['id']; ?>">

                                                    <label>
                                                        <input type="radio" name="answers[<?php echo $question['id']; ?>]" value="A" required>
                                                        <?php echo htmlspecialchars($question['option_a']); ?>
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="answers[<?php echo $question['id']; ?>]" value="B">
                                                        <?php echo htmlspecialchars($question['option_b']); ?>
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="answers[<?php echo $question['id']; ?>]" value="C">
                                                        <?php echo htmlspecialchars($question['option_c']); ?>
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="answers[<?php echo $question['id']; ?>]" value="D">
                                                        <?php echo htmlspecialchars($question['option_d']); ?>
                                                    </label><br>
                                                </div>
                                            <?php endforeach; ?>
                                            <button type="submit" class="btn btn-primary">Submit Quiz</button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <form id="finishForm" action="complete_level.php" method="POST" class="mt-4">
                        <input type="hidden" name="finish" value="1">
                        <input type="hidden" name="level_id" value="<?php echo $level_id; ?>">
                        <button type="submit" class="btn btn-success">Finish Level</button>
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
                                <h5 class="card-title">Personalized Ads</h5>
                                <hr>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <button type="button" class="btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $('#quizForm').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'quizhandler.php',
                data: $(this).serialize(),
                success: function(response) {
                    let results = JSON.parse(response);

                    // Process the results (e.g., display the answers and correctness)
                    for (let question_id in results) {
                        let result = results[question_id];
                        let status = result.status;
                        let user_answer = result.user_answer;
                        let correct_answer = result.correct_answer;

                        // Display results
                        alert(`Question ID: ${question_id}\nYour Answer: ${user_answer}\nStatus: ${status}\nCorrect Answer: ${correct_answer}`);
                    }
                },
                error: function() {
                    alert('Error submitting quiz.');
                }
            });
        });


        
        $('#finishForm').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'complete_level.php',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.trim() === "success") {
                        window.location.href = 'Home.php';
                    } else {
                        alert("Error: " + response);
                    }
                }
            });
        });
    </script>
</body>
</html>
