<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <title>Questionnaire</title>
    <style>
      @font-face {
            font-family: Helvetica;
            src: url(helveticaneue.tff);
      }

      body {
        background-image: url(img/shards_stone_background.jpg);
        background-size: cover;
        color: lightgrey;
      }

      .container {
          padding: 1%;
      }

      .box {
      }

      .title {
            font-size: 0px;
            font-family: "Helvetica";
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
            font-family: "Helvetica";
      }


      @media only screen and (max-width:768px) {
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
    }

    </style>
</head>
<body>
    <section class="section"> 
    <div class="box">  
        <div class="container is-widescreen">
        <h1 class="title">Astrology Quizlet</h1>
        

            <div class="backdrop fire">
            <p class="text fire">Astrology Quizlet</p>
            <div class="overlay fire"></div>
            </div>
            <!-- <div class="media-right">
            <figure class="image is-1by3">
            <img src="Celestials.png" alt="Image">
            </figure>
            </div> -->


            <form action="results.php" method="post" id="quiz">
              <ol>
              <li>
                <h2 class="sub-title">Which celestial body rules the astrological sign of Cancer?</h2>   
                    <div>                       
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Mars</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Moon</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />   
                    <label for="question-1-answers-C">C) Mercury</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />   
                    <label for="question-1-answers-D">D) Sun</label>   
                    </div>
              </li>
              <li>  
                    <h2 class="sub-title">What is the eleventh sign of the Western zodiac?</h2>   
                    <div>                       
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                    <label for="question-2-answers-A">A) Leo</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                    <label for="question-2-answers-B">B) Cancer</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />   
                    <label for="question-2-answers-C">C) Aquarius</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />   
                    <label for="question-2-answers-D">D) Sagittarius</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">How many degrees are there in the zodiac?</h2>   
                    <div>                       
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                    <label for="question-3-answers-A">A) 90</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <label for="question-3-answers-B">B) 180</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />   
                    <label for="question-3-answers-C">C) 270</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />   
                    <label for="question-3-answers-D">D) 360</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which American historical figure published astrological information as "Richard Saunders"</h2>   
                    <div>                       
                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                    <label for="question-4-answers-A">A) James Madison</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                    <label for="question-4-answers-B">B) Thomas Jefferson</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />   
                    <label for="question-4-answers-C">C) Alexander Hamilton</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />   
                    <label for="question-4-answers-D">D) Benjamin Franklin</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What part of the body does the astrological sign Aries rule?</h2>   
                    <div>                       
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                    <label for="question-5-answers-A">A) Head</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                    <label for="question-5-answers-B">B) Nervous System</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />   
                    <label for="question-5-answers-C">C) Stomach and Breasts</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />   
                    <label for="question-5-answers-D">D) Throat and Neck</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What kind of sign is Aries?</h2>   
                    <div>                       
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                    <label for="question-6-answers-A">A) Air</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <label for="question-6-answers-B">B) Water</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />   
                    <label for="question-6-answers-C">C) Fire</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />   
                    <label for="question-6-answers-D">D) Earth</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What is the special season for the astrological sign Aries?</h2>   
                    <div>                       
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                    <label for="question-7-answers-A">A) Fall</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-7-answers-B">B) Winter</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />   
                    <label for="question-7-answers-C">C) Summer</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />   
                    <label for="question-7-answers-D">D) Spring</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What precious metal is the astrological sign Leo associated with?</h2>   
                    <div>                       
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                    <label for="question-8-answers-A">A) Copper</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-8-answers-B">B) Silver</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />   
                    <label for="question-8-answers-C">C) Platinum</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />   
                    <label for="question-8-answers-D">D) Gold</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What is the significance of the equinoxes?</h2>   
                    <div>                       
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                    <label for="question-9-answers-A">A) They are days where eclipses can occur</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <label for="question-9-answers-B">B) Longest days of the year</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />   
                    <label for="question-9-answers-C">C) Day and night are of equal duration</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />   
                    <label for="question-9-answers-D">D) They mark the beginning of the harvesting season</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What dates are encompassed by the astrological sign of Cancer?</h2>   
                    <div>                       
                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                    <label for="question-10-answers-A">A) July 23 - August 22</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                    <label for="question-10-answers-B">B) January 20 - February 18</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                    <label for="question-10-answers-C">C) June 21 - July 22</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" /> 
                    <label for="question-10-answers-D">D) May 21 - June 20</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What are the elements of Chinese Astrology?</h2>   
                    <div>                       
                    <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                    <label for="question-11-answers-A">A) Wood, Fire, Air, Metal, Water</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                    <label for="question-11-answers-B">B) Water, Wood, Fire, Earth, Metal</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                    <label for="question-11-answers-C">C) Air, Earth, Wood, Metal, Fire</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" /> 
                    <label for="question-11-answers-D">D) Metal, Fire, Moon, Air, Sun</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">How many signs of the Zodiac are represented by an inanimate object?</h2>   
                    <div>                       
                    <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                    <label for="question-12-answers-A">A) Two</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                    <label for="question-12-answers-B">B) One</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" /> 
                    <label for="question-12-answers-C">C) Three</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                    <label for="question-12-answers-D">D) None</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What is the ruling planet of the sign Taurus?</h2>   
                    <div>                       
                    <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                    <label for="question-13-answers-A">A) Venus</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                    <label for="question-13-answers-B">B) Earth</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" /> 
                    <label for="question-13-answers-C">C) Neptune</label>   
                    </div>
            
                    <div>   
                    <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />   
                    <label for="question-13-answers-D">D) Jupiter</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which sign in the zodiac is said to be the most powerful?</h2>   
                    <div>                       
                    <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                    <label for="question-14-answers-A">A) Gemini</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                    <label for="question-14-answers-B">B) Taurus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" /> 
                    <label for="question-14-answers-C">C) Leo</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                    <label for="question-14-answers-D">D) Scorpio</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which animal represents the zodiac Taurus?</h2>   
                    <div>                       
                    <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                    <label for="question-14-answers-A">A) Ram</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                    <label for="question-15-answers-B">B) Fish</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" /> 
                    <label for="question-15-answers-C">C) Scales</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" /> 
                    <label for="question-15-answers-D">D) Bull</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which Latin word is the word Astrology derived from?</h2>   
                    <div>                       
                    <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                    <label for="question-16-answers-A">A) Astrologia</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                    <label for="question-16-answers-B">B) Astroloki</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" /> 
                    <label for="question-16-answers-C">C) Astropos</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />   
                    <label for="question-16-answers-D">D) Astrologos</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which of the following is not part of the 4 main groups of the zodiacs?</h2>   
                    <div>                       
                    <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                    <label for="question-16-answers-A">A) Earth</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                    <label for="question-17-answers-B">B) Clouds</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" /> 
                    <label for="question-17-answers-C">C) Fire</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" /> 
                    <label for="question-17-answers-D">D) Water</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which planetary body affects the earth's oceans and waves?</h2>   
                    <div>                       
                    <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                    <label for="question-17-answers-A">A) Stars</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                    <label for="question-18-answers-B">B) Sun</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />   
                    <label for="question-18-answers-C">C) Moon</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />   
                    <label for="question-18-answers-D">D) Jupiter</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which planetary body is responsible for the zodiac signs?</h2>   
                    <div>                       
                    <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                    <label for="question-19-answers-A">A) Moon</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                    <label for="question-19-answers-B">B) Stars</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" /> 
                    <label for="question-19-answers-C">C) Asteroids</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" /> 
                    <label for="question-19-answers-D">D) Sun</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Which zodiac is represented by the Twins?</h2>   
                    <div>                       
                    <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                    <label for="question-20-answers-A">A) Gemini</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                    <label for="question-20-answers-B">B) Cancer</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" /> 
                    <label for="question-20-answers-C">C) Pisces</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" /> 
                    <label for="question-20-answers-D">D) Taurus</label>  
                    <div> 
              </li> 
              <br>      
            <input class="button is-black" type="submit" value="Submit Quiz">
        </form>
        </div>
        </div>
        </section>
</body>
</html>