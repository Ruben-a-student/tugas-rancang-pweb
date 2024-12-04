<?php
include '../sessionhandler.php';
include '../connection.php';

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$level_id = intval($_POST['level_id']);
$answers = $_POST['answers'];

// Fetch the correct answers for the quiz questions
$stmt = $pdo->prepare("SELECT id, correct_option FROM quizzes WHERE level_id = :level_id");
$stmt->bindParam(':level_id', $level_id);
$stmt->execute();
$quiz_questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$correct_options = [];
foreach ($quiz_questions as $question) {
    $correct_options[$question['id']] = $question['correct_option'];
}

$results = [];

// Process the user's answers and compare with correct answers
foreach ($answers as $question_id => $answer) {
    $result = [
        'user_answer' => $answer,
        'status' => 'Correct', // Default status
    ];

    // Check if the user's answer is correct
    if ($answer !== $correct_options[$question_id]) {
        $result['status'] = 'Incorrect';
        $result['correct_answer'] = $correct_options[$question_id]; // Show correct answer
    }

    $results[$question_id] = $result;
}

// Return the results as a JSON object for display
echo json_encode($results);
?>
