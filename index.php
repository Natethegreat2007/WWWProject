<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['difficulty'])) {
    $name       = trim($_POST['player_name']);
    $difficulty = $_POST['difficulty'];

    if (!empty($name) && in_array($difficulty, ['easy', 'medium', 'hard'])) {
        $_SESSION['player_name'] = $name;
        $_SESSION['difficulty']  = $difficulty;
        $_SESSION['score']       = 0;
        $_SESSION['question']    = 0;
        header('Location: questions.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sekuya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Lingua Franca</title>
</head>
<body>

<input type="text" id="nameInput" placeholder="Your name here..." />
<br>

    <div class="home_title">
        <h1 id="typing"></h1>
        <h2>Do you know the language of computers?</h2>
    </div>

    <div class="rules">
        <ul>
            <li>Pick a difficulty and answer the question correctly.</li>
            <li>Check the leaderboard at the end of each round!</li>
        </ul>
    </div>

    <form method="POST" id="main_form">
        <div class="name_input_wrap">
            <input
                type="text"
                name="player_name"
                id="player_name"
                placeholder="Enter your name..."
                class="name_input"
                maxlength="24"
                required
            >
        </div>
        <br>
        <p class="name_greeting" id="name_greeting"></p>
        <br>

        <div class="difficulty_grid">
            <div class="easy">
                <span id="diff">Easy</span>
                <span>10 pts each</span>
                <button type="button" class="start_button" onclick="selectDifficulty('easy')">START GAME</button>
            </div>
            <div class="medium">
                <span id="diff">Medium</span>
                <span>20 pts each</span>
                <button type="button" class="start_button" onclick="selectDifficulty('medium')">START GAME</button>
            </div>
            <div class="hard">
                <span id="diff">Hard</span>
                <span>30 pts each</span>
                <button type="button" class="start_button" onclick="selectDifficulty('hard')">START GAME</button>
            </div>
        </div>
    </form>

<script>
    // BACKSPACE AND TYPING ANIMATION FOR THE TITLE
    const words = ["LINGUA FRANCA", "JavaScript", "C++", "Data Structures"];
    let wordIndex  = 0;
    let charIndex  = 0;
    let isDeleting = false;
    const typingElement = document.getElementById("typing");

    function type() {
        const currentWord = words[wordIndex];

        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }

        typingElement.textContent = currentWord.substring(0, charIndex);

        let speed = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === currentWord.length) {
            speed = wordIndex == 0 ? 4000 : 1200;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            speed = 300;
        }

        setTimeout(type, speed);
    }

    type();

    // PLAYER NAME POP UP ON ENTER
    const input = document.getElementById('player_name');
    const greeting = document.getElementById('name_greeting');

    input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();  // stop form from submitting on Enter
            const name = input.value.trim();
            if (name !== '') {
                greeting.textContent = '> Hello, ' + name + '!';
            }
        }
    });

    // SUBMIT WITH DIFFICULTY WHEN THEY CLICK A BUTTON
    function selectDifficulty(diff) {
        const name = input.value.trim();
        if (name === '') {
            alert('Enter your name first!');
            return;
        }

        // attach difficulty as hidden input then submit
        const hidden = document.createElement('input');
        hidden.type  = 'hidden';
        hidden.name  = 'difficulty';
        hidden.value = diff;
        document.getElementById('main_form').appendChild(hidden);
        document.getElementById('main_form').submit();
    }
</script>

</body>
</html>