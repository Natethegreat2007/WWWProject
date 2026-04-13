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

usort($entries, fn($a, $b) => $b['score'] - $a['score']);

$current_player = $_SESSION['player_name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leaderboard</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #0a0f1c;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    h1 {
        margin-top: 40px;
        font-size: 2rem;
        letter-spacing: 2px;
    }

    .leaderboard {
        width: 90%;
        max-width: 600px;
        margin-top: 30px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        padding: 12px;
        margin-bottom: 8px;
        background: #111827;
        border-radius: 8px;
    }

    .row:nth-child(1) { background: #1e293b; }
    .row:nth-child(2) { background: #172033; }
    .row:nth-child(3) { background: #141c2e; }

    .current {
        border: 1px solid #38bdf8;
    }

    .empty {
        margin-top: 30px;
        color: #888;
    }

    a {
        margin: 40px 0;
        text-decoration: none;
        color: #0a0f1c;
        background: #38bdf8;
        padding: 10px 20px;
        border-radius: 6px;
    }
</style>
</head>

<body>

<h1>LEADERBOARD</h1>

<div class="leaderboard">
    <?php if (empty($entries)): ?>
        <div class="empty">No scores yet.</div>
    <?php else: ?>
        <?php foreach ($entries as $i => $entry): ?>
            <div class="row <?php echo $entry['name'] === $current_player ? 'current' : ''; ?>">
                <div><?php echo $i + 1; ?>. <?php echo htmlspecialchars($entry['name']); ?></div>
                <div><?php echo $entry['score']; ?></div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<a href="index.php">Play Again</a>

</body>
</html>
