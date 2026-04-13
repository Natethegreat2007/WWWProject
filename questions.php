<?php
    $difficulty = $_GET['difficulty'] ?? 'easy';

    if (!in_array($difficulty, ['easy', 'medium', 'hard'])) {
        $difficulty = 'easy';
    }

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
    <title>Lingua Franca</title>
</head>
<body>
    <h1 style="background: rgba(<?php echo $matrix; ?>, 0.3);">
        <?php echo ucfirst($difficulty); ?> Mode
    </h1>

    <div class="question_box" style="border-left-color: <?php echo $color; ?>;">
        <canvas id="matrix_canvas"></canvas>
        <p class="question_number">// QUESTION 01</p>
        <p class="question_text">Question goes here</p>
    </div>

<script>
    const matrixColor = 'rgb(<?php echo $matrix; ?>)';

    const canvas = document.getElementById('matrix_canvas');
    const context = canvas.getContext('2d');
    canvas.width  = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    const alphabet = "01001010 11001010 00110101 10101010 01100110 11001100 00111100 10011001";
    const fontSize = 16;
    const columns  = Math.floor(canvas.width / fontSize);
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