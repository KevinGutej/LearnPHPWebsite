<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>PHP Learning Hub</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="lessons/intro.php">Lessons</a></li>
                <li><a href="assessment.php">Quiz</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>PHP Quiz</h2>
        <form action="assessment.php" method="post">
            <p>1. What does PHP stand for?</p>
            <input type="radio" name="question1" value="a"> Personal Home Page<br>
            <input type="radio" name="question1" value="b"> Private Home Page<br>
            <input type="radio" name="question1" value="c"> PHP: Hypertext Preprocessor<br>
            <input type="radio" name="question1" value="d"> None of the above<br>

            <p>2. How do you declare a variable in PHP?</p>
            <input type="radio" name="question2" value="a"> var $variable;<br>
            <input type="radio" name="question2" value="b"> $variable;<br>
            <input type="radio" name="question2" value="c"> declare $variable;<br>
            <input type="radio" name="question2" value="d"> variable $variable;<br>

            <input type="submit" name="submit_quiz" value="Submit">
        </form>

        <?php
        if (isset($_POST['submit_quiz'])) {
            $score = 0;
            if ($_POST['question1'] == 'c') {
                $score++;
            }
            if ($_POST['question2'] == 'b') {
                $score++;
            }
            echo "<p>Your score: $score/2</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 PHP Learning Hub</p>
    </footer>
</body>
</html>
