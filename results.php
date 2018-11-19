<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body>

<?php 
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];

$answer6 = $_POST['question-6-answers'];

$answer7 = $_POST['question-7-answers'];

$answer8 = $_POST['question-8-answers'];

$answer9 = $_POST['question-9-answers'];

$answer10 = $_POST['question-10-answers'];

$answer11 = $_POST['question-11-answers'];

$answer12 = $_POST['question-12-answers'];

$answer13 = $_POST['question-12-answers'];

$answer14 = $_POST['question-12-answers'];

$answer15 = $_POST['question-12-answers'];

$answer16 = $_POST['question-12-answers'];

$answer17 = $_POST['question-12-answers'];

$answer18 = $_POST['question-12-answers'];

$answer19 = $_POST['question-12-answers'];

$answer20 = $_POST['question-12-answers'];


$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "D") { $totalCorrect++; }

if ($answer4 == "D") { $totalCorrect++; }

if ($answer5 == "C") { $totalCorrect++; }

if ($answer6 == "A") { $totalCorrect++; }

if ($answer7 == "C") { $totalCorrect++; }

if ($answer8 == "B") { $totalCorrect++; }

if ($answer9 == "B") { $totalCorrect++; }

if ($answer10 == "C") { $totalCorrect++; }

if ($answer11 == "D") { $totalCorrect++; }

if ($answer11 == "A") { $totalCorrect++; }

if ($answer11 == "C") { $totalCorrect++; }

if ($answer12 == "A") { $totalCorrect++; }

if ($answer13 == "B") { $totalCorrect++; }

if ($answer14 == "B") { $totalCorrect++; }

if ($answer15 == "C") { $totalCorrect++; }

if ($answer16 == "B") { $totalCorrect++; }

if ($answer17 == "C") { $totalCorrect++; }

if ($answer18 == "A") { $totalCorrect++; }

if ($answer19 == "D") { $totalCorrect++; }

if ($answer20 == "A") { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 20 correct</div>";

switch ($totalCorrect) {
    case ($totalCorrect <= 4):
        echo 'A for Effort..';
        break;
    case ($totalCorrect >= 5 && $totalCorrect <= 10):
        echo 'Try again next time :)';
        break;
    case ($totalCorrect >= 11 && $totalCorrect <= 15):
        echo 'You passed, barely..';
        break;
    case ($totalCorrect >= 16 && $totalCorrect <= 20):
        echo 'Well done you passed this random quiz..';
        break;

}
?>


    
</body>
</html>