<?php
session_start();

if (!isset($_SESSION['player_name'])) {
    header('Location: index.php');
    exit;
}

$name       = $_SESSION['player_name'];
$score      = $_SESSION['score'];
$difficulty = $_SESSION['difficulty'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Lingua Franca — Score</title>
</head>
<body>
    <div class="home_title">
        <h1>SESSION COMPLETE</h1>
        <h2>Well played, <?php echo htmlspecialchars($name); ?></h2>
    </div>

    <div class="score_box">
        <p class="score_label">// FINAL SCORE</p>
        <p class="score_number"><?php echo $score; ?></p>
        <p class="score_diff">Difficulty: <?php echo ucfirst($difficulty); ?></p>
    </div>

    <div class="score_actions">
        <a href="leaderboard.php" class="start_button">VIEW LEADERBOARD</a>
        <a href="index.php" class="start_button">PLAY AGAIN</a>
    </div>
</body>
</html>