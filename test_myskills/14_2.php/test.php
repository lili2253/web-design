<?php
session_start();

// Define 20 tests with names
$tests = [
    "Math Test", "Science Test", "English Test", "History Test", "Geography Test",
    "Physics Test", "Chemistry Test", "Biology Test", "Computer Science Test", "Programming Test",
    "Data Structures Test", "Algorithms Test", "Web Development Test", "Database Test", "Networking Test",
    "Cybersecurity Test", "AI & Machine Learning Test", "Cloud Computing Test", "Software Engineering Test", "IoT Test"
];

// Initialize or retrieve previous scores
if (!isset($_SESSION['test_scores'])) {
    $_SESSION['test_scores'] = [];
    $_SESSION['test_timing'] = [];
}

// Simulate test scores and timing
$total_score = 0;
$max_score = 100 * count($tests);
foreach ($tests as $index => $test) {
    $score = rand(50, 100); // Random score between 50-100
    $time_taken = rand(5, 60); // Random time between 5-60 mins

    $_SESSION['test_scores'][$test] = $score;
    $_SESSION['test_timing'][$test] = $time_taken;

    $total_score += $score;
}

// Calculate marked rate
$marked_rate = round(($total_score / $max_score) * 100, 2);

// Rating system
if ($marked_rate >= 90) {
    $rating = "Excellent ⭐⭐⭐⭐⭐";
} elseif ($marked_rate >= 75) {
    $rating = "Very Good ⭐⭐⭐⭐";
} elseif ($marked_rate >= 60) {
    $rating = "Good ⭐⭐⭐";
} elseif ($marked_rate >= 40) {
    $rating = "Average ⭐⭐";
} else {
    $rating = "Needs Improvement ⭐";
}

// Display Results
echo "<h2>Test Results</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Test</th><th>Score</th><th>Time Taken (mins)</th></tr>";
foreach ($tests as $test) {
    echo "<tr>
        <td>{$test}</td>
        <td>{$_SESSION['test_scores'][$test]}</td>
        <td>{$_SESSION['test_timing'][$test]}</td>
    </tr>";
}
echo "</table>";

echo "<h3>Final Marked Rate: {$marked_rate}%</h3>";
echo "<h3>Performance Rating: {$rating}</h3>";

?>
