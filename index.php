<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <title>Quiz</title>
    <style>
      @font-face {
            font-family: 'Space';
            src: url(fonts/space_and_astronomy.ttf);
      }

      body {
        background-image: url(img/shards_stone_background.jpg);
        background-size: cover;
        color: lightgrey;
        line-height: 28px;
        font-family: 'Space';
      }

      .container {
          padding: 1%;
          margin:0 2%;
          
      }

      /* hidden title for responsive in tablet and mobile */

      .title {
            font-size: 0px;
            font-family: 'Space';
      }

      /* text with backdrop of image */

      .backdrop {
            width: 500px; 
            height: 60px;
            position: relative;
            background-size: 60%;
      }
      .text {
            color: black;
            background-color: white;
            mix-blend-mode:screen; 
            width: 100%; 
            height: 100%;
            font-weight: bolder;
      }

      .fire.backdrop {
            background-image: url(img/astros.jpg);
      }
      .fire.overlay {
            background-color: rgba(255,0,0,.3);
      }
      .fire.text {
            padding-top: 10px;
            font-size: 40px;
            font-family: 'Space';
      }

      /* image float to the right of site */

      figure{
            border-radius: 10%;
            overflow: hidden;
      }

      .media-right {
            float: right;
            width: 25%;
            height: 50%;
      }

      /* emojis */

      #zodiacs {
            padding-top: 10px;
            padding-bottom: 30px;
            font-size: 24px;
      }


      @media only screen and (max-width: 768px) {
      body {
        background-image: url(img/shards_stone_background.jpg);
        background-size: cover;
        color: lightgrey;
        font-family: 'Space';
      }

      .title {
            font-size: 0px;
            font-family: "Space";
      }

      .container {
          padding: 2%;
      }

      .backdrop {
            width: 400px; 
            height: 60px;
            position: relative;
            background-size: 50%;
      }
      .text {
            color: black;
            background-color: white;
            mix-blend-mode:screen; 
            width: 100%; 
            height: 100%;
            font-weight: bolder;
      }

      .fire.backdrop {
            background-image: url(img/astros.jpg);
      }
      .fire.overlay {
            background-color: rgba(255,0,0,.3);
      }
      .fire.text {
            font-size: 40px;
            font-family: "Space";
      }

      figure{
            border-radius: 10%;
            overflow: hidden;
      }

      .media-right {
            float: right;
            width: 25%;
            height: 50%;
      }

      #zodiacs {
            padding-top: 10px;
            padding-bottom: 30px;
            font-size: 24px;
      }

    }

    @media only screen and (max-width: 650px) {
      body {
        background-image: url(img/shards_stone_background.jpg);
        background-size: cover;
        color: lightgrey;
      }

      .title {
            font-size: 40px;
            font-family: "Helvetica";
      }

      .container {
          padding: 2%;
      }

      .backdrop {
            color:white;
      }
      .text {
            color: black;
            width: 100%; 
            height: 100%;
            font-weight: bolder;
      }

      .fire.backdrop {
            display:none;
      }
      .fire.overlay{
            display:none;
      }
      .fire.text{
            font-size: 40px;
            font-family: "Helvetica";
      }

      figure{
            display: none;
      }

      .media-right {
            display: none;
      }

      #zodiacs {
            display:none;
      }

    }

    </style>
</head>
<body>

<!-- Box with container that holds all the content -->

      <section class="section"> 
            <div class="box">  
                  <div class="container is-widescreen">

                  <!-- astrology headings with responsive changes -->

                        <h1 class="title">Astrology Quiz</h1>

                        <div class="backdrop fire">
                              <p class="text fire">Astrology Quiz</p>
                              <div class="overlay fire"></div>
                        </div>

                        <h2 class="sub-title" id="zodiacs">♈♉♊♓♋♌♒♍♎♏♐♑</h2>

                        <div class="media-right">
                              <figure class="image is-1by3">
                                    <img src="img/Celestials.png" alt="Image">
                              </figure>
                        </div>

                        <!-- form begins here with all the questions -->

                        <?php
                              $main = array(
                                    'question-1-answers' => array(
                                          'question' => 'Which celestial body rules the astrological sign of Cancer?',
                                          'Mars',
                                          'Moon',
                                          'Sun',
                                          'Stars'
                                    ),
                                    'question-2-answers' => array(
                                          'question' => 'What is the eleventh sign of the zodiac?',
                                          'Leo',
                                          'Cancer',
                                          'Aquarius',
                                          'Sagittarius'
                                    ),
                                    'question-3-answers' => array(
                                          'question' => 'What kind of sign is Aries?',
                                          'Air',
                                          'Water',
                                          'Fire',
                                          'Earth'
                                    ),
                                    'question-4-answers' => array(
                                          'question' => 'What is the special season for the astrological sign Aries?',
                                          'Fall',
                                          'Winter',
                                          'Summer',
                                          'Spring'
                                    ),
                                    'question-5-answers' => array(
                                          'question' => 'What precious metal is the astrological sign Leo associated with?',
                                          'Copper',
                                          'Silver',
                                          'Platinum',
                                          'Gold'
                                    ),
                                    'question-6-answers' => array(
                                          'question' => 'What is the significance of the equinoxes?',
                                          'They are days where eclipses can occur',
                                          'Longest days of the year',
                                          'Day and night are of equal duration',
                                          'They mark the beginning of the harvesting season'
                                    ),
                                    'question-7-answers' => array(
                                          'question' => 'What dates are encompassed by the astrological sign of Cancer?',
                                          'July 23 - August 22',
                                          'January 20 - February 18',
                                          'June 21 - July 22',
                                          'May 21 - June 20'
                                    ),
                                    'question-8-answers' => array(
                                          'question' => 'What are the elements of Chinese Astrology?',
                                          'Wood, Fire, Air, Metal, Water',
                                          'Water, Wood, Fire, Earth, Metal',
                                          'Air, Earth, Wood, Metal, Fire',
                                          'Metal, Fire, Moon, Air, Sun'
                                    ),
                                    'question-9-answers' => array(
                                          'question' => 'How many signs of the Zodiac are represented by an inanimate object?',
                                          'Two',
                                          'One',
                                          'Three',
                                          'None'
                                    ),
                                    'question-10-answers' => array(
                                          'question' => 'What is the ruling planet of the sign Taurus?',
                                          'Venus',
                                          'Earth',
                                          'Neptune',
                                          'Jupiter'
                                    ),
                                    'question-11-answers' => array(
                                          'question' => 'Which sign in the zodiac is said to be the most powerful?',
                                          'Scorpio',
                                          'Leo',
                                          'Gemini',
                                          'Virgo'
                                    ),
                                    'question-12-answers' => array(
                                          'question' => 'Which animal represents the zodiac Taurus?',
                                          'Ram',
                                          'Fish',
                                          'Scale',
                                          'Bull'
                                    ),
                                    'question-13-answers' => array(
                                          'question' => 'Which Latin word is the word Astrology derived from?',
                                          'Astrologia',
                                          'Astroloki',
                                          'Astropos',
                                          'Astrologos'
                                    ),
                                    'question-14-answers' => array(
                                          'question' => 'Which of the following is not part of the 4 main groups of the zodiacs?',
                                          'Earth',
                                          'Clouds',
                                          'Fire',
                                          'Water'
                                    ),
                                    'question-15-answers' => array(
                                          'question' => 'Which planetary body affects the earths oceans and waves?',
                                          'Stars',
                                          'Sun',
                                          'Moon',
                                          'Jupiter'
                                    ),
                                    'question-16-answers' => array(
                                          'question' => 'Which planetary body is responsible for the zodiac signs?',
                                          'Moon',
                                          'Stars',
                                          'Asteroids',
                                          'Sun'
                                    ),
                                    'question-17-answers' => array(
                                          'question' => 'Which zodiac is represented by the Twins?',
                                          'Gemini',
                                          'Cancer',
                                          'Pisces',
                                          'Taurus'
                                    ),
                                    'question-18-answers' => array(
                                          'question' => 'How many degrees are there in the zodiac?',
                                          '180',
                                          '120',
                                          '100',
                                          '360'
                                    ),
                                    'question-19-answers' => array(
                                          'question' => 'Which American historical figure published astrological information as "Richard Saunders"?',
                                          'James Madison',
                                          'Alexander Hamilton',
                                          'Thomas Jefferson',
                                          'Benjamin Franklin'
                                    ),
                                    'question-20-answers' => array(
                                          'question' => 'What part of the body does the astrological sign Aries rule?',
                                          'Throat and Neck',
                                          'Head',
                                          'Nervous System',
                                          'Stomach'
                                    ),
                              ); ?>

                              <!-- foreach loop in php for results -->

                              <form action="results.php" method="post" id="quiz">
                              <ol>

                              <?php
                              foreach ($main as $n => $qstn) { ?>
                                    <li>
                                          <h2 class="sub-title"><?php echo implode(array_splice($qstn, 0, 1)) ?></h2>   
                                                <?php 
                                                foreach ($qstn as $key => $answr) {
                                                ?> 
                                                      <div>                       
                                                            <input type="radio" name="<?php echo $n; ?>" id="question-1-answers" value="<?php echo $key; ?>" required oninvalid="this.setCustomValidity('Oops you missed something')">
                                                            <label for="<?php echo $n; ?>"><?php echo $answr;?></label>       
                                                      </div>
                                                <?php
                                                }
                                                ?> 
                                          </li> <?php
                                    }
                              ?> 
                              <br>
                              
                              <!-- submit button linked to results page -->

                              <input class="button is-black" type="submit" value="Submit Quiz">
                        </form>
                  </div>
            </div>
      </section>
</body>
</html>