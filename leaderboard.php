<?php
session_start();

$entries = [];

if (file_exists('leaderboard.txt')) {
    $lines = file('leaderboard.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode(',', $line);
        if (count($parts) === 3) {
            $entries[] = [
                'name'       => $parts[0],
                'score'      => (int)$parts[1],
                'difficulty' => $parts[2]
            ];
        }
    }
}

// sort by score descending
usort($entries, fn($a, $b) => $b['score'] - $a['score']);

$current_player = $_SESSION['player_name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Lingua Franca — Leaderboard</title>
</head>
<body>
    <div class="home_title">
        <h1>LEADERBOARD</h1>
        <h2>// session_rankings</h2>
    </div>

    <div class="leaderboard_wrap">
        <?php if (empty($entries)): ?>
            <p class="lb_empty">> no scores yet. be the first.</p>
        <?php else: ?>
            <table class="lb_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Player</th>
                        <th>Score</th>
                        <th>Difficulty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entries as $i => $entry): ?>
                        <tr class="<?php echo $entry['name'] === $current_player ? 'current_player' : ''; ?>">
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo htmlspecialchars($entry['name']); ?></td>
                            <td><?php echo $entry['score']; ?></td>
                            <td><?php echo ucfirst(htmlspecialchars($entry['difficulty'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <div class="score_actions">
        <a href="index.php" class="start_button">PLAY AGAIN</a>
    </div>
</body>
</html>