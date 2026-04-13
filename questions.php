<?php
session_start();

if (!isset($_SESSION['player_name'])) {
    header('Location: index.php');
    exit;
}

include 'questions_data.php';

$difficulty = $_SESSION['difficulty'];
$pool       = $questions[$difficulty];
$total      = count($pool);

// check submitted answer FIRST before reading $qIndex
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer'])) {
    $qIndex    = $_SESSION['question'];
    $submitted = (int)$_POST['answer'];
    $correct   = $pool[$qIndex]['answer'];

    if ($submitted === $correct) {
        $_SESSION['score'] += $pool[$qIndex]['points'];
    }

    $_SESSION['question']++;

    if ($_SESSION['question'] >= $total) {
        $entry = $_SESSION['player_name'] . ',' . $_SESSION['score'] . ',' . $difficulty . "\n";
        file_put_contents('leaderboard.txt', $entry, FILE_APPEND | LOCK_EX);
        header('Location: score.php');
        exit;
    }
}

// NOW read the updated index
$qIndex = $_SESSION['question'];

// safety check — if index is somehow out of bounds, go to score
if ($qIndex >= $total || !isset($pool[$qIndex])) {
    header('Location: score.php');
    exit;
}

$current = $pool[$qIndex];

$colors = [
    'easy'   => ['border' => 'rgb(33, 205, 76)',  'matrix' => '33, 205, 76'],
    'medium' => ['border' => 'rgb(205, 165, 33)', 'matrix' => '205, 165, 33'],
    'hard'   => ['border' => 'rgb(205, 33, 33)',  'matrix' => '205, 33, 33'],
];
$color  = $colors[$difficulty]['border'];
$matrix = $colors[$difficulty]['matrix'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .option_label     { background: <?php echo $color; ?>; }
        .option_btn:hover { border-color: <?php echo $color; ?>; }
    </style>
    <title>Lingua Franca</title>
</head>
<body>
    <h1 style="background: rgba(<?php echo $matrix; ?>, 0.3);">
        <?php echo ucfirst($difficulty); ?> Mode
    </h1>

    <div class="quiz_meta">
        <span>Player: <?php echo htmlspecialchars($_SESSION['player_name']); ?></span>
        <span>Question <?php echo $qIndex + 1; ?> of <?php echo $total; ?></span>
        <span>Score: <?php echo $_SESSION['score']; ?></span>
    </div>

    <div class="question_box" style="border-left-color: <?php echo $color; ?>;">
        <canvas id="matrix_canvas"></canvas>
        <p class="question_number">// QUESTION <?php echo str_pad($qIndex + 1, 2, '0', STR_PAD_LEFT); ?></p>
        <p class="question_text"><?php echo htmlspecialchars($current['text']); ?></p>
    </div>

    <form method="POST">
        <div class="options_grid">
            <?php
            $labels = ['A', 'B', 'C', 'D'];
            foreach ($current['options'] as $i => $option): ?>
                <button type="submit" name="answer" value="<?php echo $i; ?>" class="option_btn">
                    <span class="option_label"><?php echo $labels[$i]; ?></span>
                    <span class="option_text"><?php echo htmlspecialchars($option); ?></span>
                </button>
            <?php endforeach; ?>
        </div>
    </form>

<script>
    const matrixColor = 'rgb(<?php echo $matrix; ?>)';

    const canvas  = document.getElementById('matrix_canvas');
    const context = canvas.getContext('2d');
    canvas.width  = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    const alphabet  = "01001010 11001010 00110101 10101010 01100110 11001100 00111100 10011001";
    const fontSize  = 16;
    const columns   = Math.floor(canvas.width / fontSize);
    const rainDrops = [];

    for (let x = 0; x < columns; x++) {
        rainDrops[x] = 1;
    }

    const draw = () => {
        context.fillStyle = 'rgba(0, 0, 0, 0.05)';
        context.fillRect(0, 0, canvas.width, canvas.height);
        context.fillStyle = matrixColor;
        context.font = fontSize + 'px "Share Tech Mono"';

        for (let i = 0; i < rainDrops.length; i++) {
            const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
            context.fillText(text, i * fontSize, rainDrops[i] * fontSize);
            if (rainDrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                rainDrops[i] = 0;
            }
            rainDrops[i]++;
        }
    };

    setInterval(draw, 30);

    window.addEventListener('resize', () => {
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    });
</script>
</body>
</html>