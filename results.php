<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
// if ($answer20) { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 20 correct</div>";
?>
    
</body>
</html>