<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <title>Results</title>
    <style>
        body {
        background-image: url(img/sky_point_light.jpg);
        background-size: cover;
        color: lightgrey;
      }

      .container {
          margin: 0 auto;
          padding: 5%;
          left: 10%;
      }

    </style>
</head>
<body>
<section class="section"> 
    <div class="box"> 
        <div class="container">

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

$answer13 = $_POST['question-13-answers'];

$answer14 = $_POST['question-14-answers'];

$answer15 = $_POST['question-14-answers'];

$answer16 = $_POST['question-16-answers'];

$answer17 = $_POST['question-17-answers'];

$answer18 = $_POST['question-18-answers'];

$answer19 = $_POST['question-19-answers'];

$answer20 = $_POST['question-20-answers'];


$totalCorrect = 1;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "C") { $totalCorrect++; }

if ($answer3 == "D") { $totalCorrect++; }

if ($answer4 == "D") { $totalCorrect++; }

if ($answer5 == "A") { $totalCorrect++; }

if ($answer6 == "C") { $totalCorrect++; }

if ($answer7 == "D") { $totalCorrect++; }

if ($answer8 == "D") { $totalCorrect++; }

if ($answer9 == "C") { $totalCorrect++; }

if ($answer10 == "C") { $totalCorrect++; }

if ($answer11 == "B") { $totalCorrect++; }

if ($answer12 == "B") { $totalCorrect++; }

if ($answer13 == "A") { $totalCorrect++; }

if ($answer14 == "D") { $totalCorrect++; }

if ($answer15 == "D") { $totalCorrect++; }

if ($answer16 == "A") { $totalCorrect++; }

if ($answer17 == "B") { $totalCorrect++; }

if ($answer18 == "C") { $totalCorrect++; }

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
        echo 'You passed, barely.';
        break;
    case ($totalCorrect >= 16 && $totalCorrect <= 20):
        echo 'Well done, you are a guardian of the galaxy.';
        break;
}
?>
<br>
<br>
<br>
<a class="button is-dark" href="http://quiz/">Retake Quiz</a>
</section>
</div>
</div>



    
</body>
</html>