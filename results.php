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
        background-image: url(img/sky_light_abstraction.jpg);
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

                // variable that converts numbers to letters

                $convert = array('A', 'B', 'C', 'D');
                
                // variables attached to name conventions in the index

                $answer1 = $convert[$_POST['question-1-answers']];

                $answer2 = $convert[$_POST['question-2-answers']];

                $answer3 = $convert[$_POST['question-3-answers']];

                $answer4 = $convert[$_POST['question-4-answers']];

                $answer5 = $convert[$_POST['question-5-answers']];

                $answer6 = $convert[$_POST['question-6-answers']];

                $answer7 = $convert[$_POST['question-7-answers']];

                $answer8 = $convert[$_POST['question-8-answers']];

                $answer9 = $convert[$_POST['question-9-answers']];

                $answer10 = $convert[$_POST['question-10-answers']];

                $answer11 = $convert[$_POST['question-11-answers']];

                $answer12 = $convert[$_POST['question-12-answers']];

                $answer13 = $convert[$_POST['question-13-answers']];

                $answer14 = $convert[$_POST['question-14-answers']];

                $answer15 = $convert[$_POST['question-15-answers']];

                $answer16 = $convert[$_POST['question-16-answers']];

                $answer17 = $convert[$_POST['question-17-answers']];

                $answer18 = $convert[$_POST['question-18-answers']];

                $answer19 = $convert[$_POST['question-19-answers']];

                $answer20 = $convert[$_POST['question-20-answers']];


                $totalCorrect = 0;

                // marking system displaying correct answers

                if ($answer1 == "B") { $totalCorrect++; }

                if ($answer2 == "C") { $totalCorrect++; }

                if ($answer3 == "C") { $totalCorrect++; }

                if ($answer4 == "D") { $totalCorrect++; }

                if ($answer5 == "D") { $totalCorrect++; }

                if ($answer6 == "C") { $totalCorrect++; }

                if ($answer7 == "C") { $totalCorrect++; }

                if ($answer8 == "C") { $totalCorrect++; }

                if ($answer9 == "B") { $totalCorrect++; }

                if ($answer10 == "A") { $totalCorrect++; }

                if ($answer11 == "B") { $totalCorrect++; }

                if ($answer12 == "D") { $totalCorrect++; }

                if ($answer13 == "A") { $totalCorrect++; }

                if ($answer14 == "B") { $totalCorrect++; }

                if ($answer15 == "C") { $totalCorrect++; }

                if ($answer16 == "B") { $totalCorrect++; }

                if ($answer17 == "A") { $totalCorrect++; }

                if ($answer18 == "D") { $totalCorrect++; }

                if ($answer19 == "D") { $totalCorrect++; }

                if ($answer20 == "B") { $totalCorrect++; }

                echo "<div id='results'>$totalCorrect / 20 correct</div>";

                // different outputs varying on the mark obtained

                switch ($totalCorrect) {
                    case ($totalCorrect <= 4):
                        echo 'A for Effort..';
                        break;
                    case ($totalCorrect >= 5 && $totalCorrect <= 9):
                        echo 'Try again next time :)';
                        break;
                    case ($totalCorrect >= 10 && $totalCorrect <= 14):
                        echo 'You passed, and now all they say is congratulations';
                        break;
                    case ($totalCorrect >= 15 && $totalCorrect <= 20):
                        echo 'Well done, you are a guardian of the galaxy.';
                        break;
                }
                ?>
                <br>
                <br>
                <br>
                <a class="button is-dark" href="http://quiz/">Retake Quiz</a>
            </div>
        </div>
    </section>  
</body>
</html>